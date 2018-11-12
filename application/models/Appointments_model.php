<?php
class Appointments_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


public function get_appointment(){
	$this->db->select('*');
	$this->db->from('add_appointment');
	$query=$this->db->get();
	return $query->result_array();
}

/* write above here */
}
?>