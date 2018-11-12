<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Appointments extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('appointments_model');
	}

public function index()
{
	$data['add_appointment']=$this->appointments_model->get_appointment();
	$this->display('admin/appointments',$data);
}
/* write above here */
}
?>