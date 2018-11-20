<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Menu_setup extends Admin_controller{


	public function __construct(){
		parent::__construct();
		  $this->load->model('menu_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['menu_setup']=$this->menu_setup_model->get_menu();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/menu_setup',$data);
}

public function add(){
	$this->form_validation->set_rules('map_plugin', 'Map Plugin', 'required');
	$this->form_validation->set_rules('address', 'Address', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone', 'Phone', 'required');
	if($this->form_validation->run()===FALSE){
		redirect('admin/contact_setup');
	}else{
		$this->contact_setup_model->set_contact();
		redirect('admin/contact_setup');
	}

}

}
?>