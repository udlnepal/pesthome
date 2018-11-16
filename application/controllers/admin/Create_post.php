<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Create_post extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('create_post_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['contact_about']=$this->create_post_model->get_post_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/create_post',$data);
}

/* for adding post */
public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/slider';
                $config['allowed_types']        = 'jpg|jpeg|png|gif|svg';
                $config['file_name']='slider';


                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');

                if ( ! $file )
                {

                        $error = array('error' => $this->upload->display_errors());
                     echo "i am still here"; exit;
                        redirect('admin/slider_setup', $error);

                }
                else
                {

$test = $this->uri->segment(4);

if($test==0)
                    {
                        $post_id=0;
                     
                    }
                else {
                  
                   $post_id = $this->uri->segment(4);
  
                }

                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );                      
                       	$this->create_post_model->set_post_image_name($post_id,$data['file_name'],$data['full_path']);
                        redirect('admin/slider_setup',$data);

                }
        }

/* write above here */
}
?>