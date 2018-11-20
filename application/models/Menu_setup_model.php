<?php
class Menu_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_contact($cont_id=0){
    	$data=array(
    	'map_plugin'=>$this->input->post('map_plugin'),
    	'address'=>$this->input->post('address'),
    	'phone'=>$this->input->post('phone'),
    	'email'=>$this->input->post('email'),		

    	);

    	if($cont_id==0){
    		return $this->db->insert('contact_about',$data);
    	}
    	else{
    		$this->db->where('cont_id',$cont_id);
    		return $this->db->update('contact_about',$data);
    	}

    }

    public function get_menu(){
        $this->db->limit(4);
    	$query=$this->db->get_where('contact_about');

    	return $query->result_array();
    }
/* write above here */
}