<?php
class Services_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_services($service_id=0){
    	$data=array(
    	'service_title'=>$this->input->post('service_title'),
    	'service_content'=>$this->input->post('service_content'),
    	
    	);

    	if($service_id==0){

    		return $this->db->insert('services_setup',$data);
    	}
    	else{

    		$this->db->where('service_id',$service_id);
    		return $this->db->update('services_setup',$data);
    	}

    }

    public function get_services(){
      //  $this->db->limit();
    	$query=$this->db->get_where('services_setup');

    	return $query->result_array();
    }
/* write above here */
}