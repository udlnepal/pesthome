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
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('site_model');

    }
	 public function display($view,$data){
	 		$this->load->view('site_templates/header');
	 		$this->load->view('site_templates/navigation');
	 		$this->load->view($view,$data);
	 		$this->load->view('site_templates/footer');

	 }

	public function index()
	{
		$data['test_title']="Comming Soong";
		$this->display('site/index',$data);

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
}
