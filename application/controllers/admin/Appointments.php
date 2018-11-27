<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Appointments extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('appointments_model');
		  $this->load->model('user_model');
		  $this->load->library('Excel');
	}

public function index()
{
	  $data['titlename']=$this->user_model->get_logged_user();
	$data['add_appointment']=$this->appointments_model->get_appointment();
	$this->display('admin/appointments',$data);
}


public function app_status(){
		$app_id=$this->uri->segment(4);
		$app_status=$this->uri->segment(5);


	if(empty($app_id)){
        show_404();
    }
    $this->appointments_model->set_app_status($app_id,$app_status);
    redirect('admin/appointments');

	}

public function excel_export(){
	// echo "here";exit;

        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=AppointmentReport_".date('d/m/Y').".xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");
        $data=$this->appointments_model->get_appointment_excel();
       // print_r($data);exit;
        $viewtable='<table><tr><td>SN</td><td>Name</td><td>Email</td><td>Phone</td><td>Date of Appointment</td><td>Status</td></tr>';
       // echo $viewtable;exit;
      $count=1;  foreach($data as $app_data){
        	//print_r($app_data); exit;
        $viewtable.='<tr><td>'.$count.'</td><td>'.$app_data->firstname.'</td><td>'.$app_data->email.'</td><td>'.$app_data->phone.'</td><td>'.$app_data->date.'</td><td>'.$app_data->app_status.'</td></tr>';
		$count++;
		}
		$viewtable.='</table>';
		echo $viewtable;
		//redirect('admin/appointments');
}

/* write above here */
}
?>