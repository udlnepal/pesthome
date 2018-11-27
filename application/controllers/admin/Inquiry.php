<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Inquiry extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('inquiry_model');
		  $this->load->model('user_model');
		  $this->load->helper(array('form', 'url'));

        $this->load->library(array('session', 'form_validation'));
	}

public function index()
{
	$data['titlename']=$this->user_model->get_logged_user();
	$data['inquiry']=$this->inquiry_model->get_inquiry();
	$this->display('admin/inquiry',$data);
}


public function delete(){
	$inquiry_id=$this->uri->segment(4);
	if (empty($inquiry_id)){
		error_404();
	}
	else{
		 $this->inquiry_model->delete_inquiry($inquiry_id);
		redirect('admin/inquiry');
	}
}

public function download_inquiry(){
  $this->load->library('pdf');
  $pdf  = $this->pdf->load(); 
  $data['inquiry']=$this->inquiry_model->get_inquiry();
  ini_set('memory_limit', '256M');
  $html = $this->load->view('admin/download_inquiry', $data, true);
  $pdf->WriteHTML($html); 
  $output = 'Inquiry Report'.'.pdf'; 
  $pdf->Output($output, 'D'); /*I for viewing directly in browser*/ 
  exit();    

}

/* write above here */
}
?>