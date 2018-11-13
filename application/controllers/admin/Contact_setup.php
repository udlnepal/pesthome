<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Contact_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('contact_setup_model');
		  $this->load->model('user_model');
	}


public function index(){
	
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/contact_setup',$data);
}
/* write above here */
}
?>