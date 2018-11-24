<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
    {
        parent::__construct();
         $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->helper('form');
       
        $this->load->library('form_validation');
        $this->load->model('site_model');
        $this->load->model('contact_setup_model');
        $this->load->model('menu_setup_model');
        $this->load->model('create_page_model');
        $this->load->model('services_setup_model');
        $this->load->model('slider_setup_model');
        $this->load->model('vmi_setup_model');

        $this->load->model('inquiry_model');

    }
	 public function display($view,$data){
	 	$data['contact_setup']=$this->contact_setup_model->get_contact();
	 	$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
	 	$data['services_setup']=$this->services_setup_model->get_services();
	 	$data['slider_setup']=$this->slider_setup_model->get_slider_image_name();
	 		$data['vmi_setup']=$this->vmi_setup_model->get_vmi();

	 		$this->load->view('site_templates/header',$data);
	 		$this->load->view('site_templates/navigation',$data);
	 		$this->load->view($view,$data);
	 		$this->load->view('site_templates/footer',$data);

	 }

	public function index()
	{
		$data['test_title']="Comming Soong";
		$this->display('site/home',$data);

	}

	public function home2()
	{
		$data['test_title']="Comming Soong";
		$this->display('site/index_backup',$data);

	}


	public function home3()
	{
		$data['test_title']="Comming Soong";
		$this->display('site/index',$data);

	}


	public function page()

	{

		$data['create_page']=$this->create_page_model->get_page_content();
		$this->display('site/page',$data);
	}

	public function contact()
	{
		$data['test_title']="Contact Us";
		$this->display('site/contact',$data);
	}
	
	public function add_appointment()
	{
		$this->form_validation->set_rules('firstname','First Name', 'required');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('date','Date', 'required');
		$this->form_validation->set_rules('phone','Phone', 'required');

		if($this->form_validation->run()===FALSE){

		}
		else{
			$this->site_model->confirm_appointment();
			$this->session->set_flashdata('Success','Thank You For Making Appointment. We Will Contact You Soon!');
			redirect('site');
		}
	}


	public function add_inquiry(){
    $this->inquiry_model->set_inquiry();
    redirect('site/contact');

	}

}
