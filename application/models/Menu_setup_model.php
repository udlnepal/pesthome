<?php
class Menu_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_menu($cont_id=0){
    	$data=array(
    	'ms_page_id'=>$this->input->post('ms_page_id'),
    	'ms_title'=>$this->input->post('ms_title'),
    	'ms_order'=>$this->input->post('ms_order'),
    	//'email'=>$this->input->post('email'),		

    	);

    	if($cont_id==0){
    		return $this->db->insert('menu_setup',$data);
    	}
    	else{
    		$this->db->where('cont_id',$cont_id);
    		return $this->db->update('menu_setup',$data);
    	}

    }

    public function get_menu(){
        $this->db->limit(4);
    	$query=$this->db->get_where('menu_setup');

    	return $query->result_array();
    }

    public function delete_menu($ms_id){
         $this->db->where('ms_id', $ms_id);
        return $this->db->delete('menu_setup');
    }
/* write above here */
}