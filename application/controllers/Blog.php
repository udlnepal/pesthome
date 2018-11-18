<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->helper('form');      
        $this->load->library('form_validation');
        $this->load->model('site_model');
        $this->load->model('create_post_model');
        $this->load->model('contact_setup_model');
        $this->load->helper('text');

    }

    public function display($view,$data){
    	
    	$this->load->view('site_templates/header',$data);
    	$this->load->view('site_templates/navigation');
    	$this->load->view($view,$data);
    	$this->load->view('site_templates/footer');

    }
    public function index()
    {   $data['contact_setup']=$this->contact_setup_model->get_contact();
        $data['create_post']=$this->create_post_model->get_post_image_name();
    	$data['title']="Welcome to Blog";
    	$this->display('blog/index',$data);
    }
   
     public function post()
    {   $data['contact_setup']=$this->contact_setup_model->get_contact();
        $data['create_post']=$this->create_post_model->get_post_content();
        $data['title']="Welcome to Blog";
        $this->display('blog/post',$data);
    }

}