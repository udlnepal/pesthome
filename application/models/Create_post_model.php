<?php
class Create_post_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_post_image_name($post_id = 0,$file_name,$full_path)
    {

             $this->load->helper('url');
        $slug = url_title($this->input->post('post_title'), 'dash', TRUE);
        $data = array(
            'post_image_name'=>$file_name,
            'post_image_url'=>$full_path,
            'slug'=>$slug,
            'post_title'=>$this->input->post('post_title'),
            'post_content'=>$this->input->post('post_content'),
            'post_author'=>$this->input->post('post_author'),
            'post_date'=> date('M j, Y'),
            'post_status'=>"unpublished",
           

        );
        if ($post_id === 0)
        {
        	return $this->db->insert('create_post',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('post_id',$post_id);
        return $this->db->update('create_post',$data);
    }
 
 }

 public function get_post_image_name(){
	{
       
    $query = $this->db->get_where('create_post');
    return $query->result_array();
    }
}



     public function get_post_image_byid($post_id = 0)
    {
        //echo "here";exit;
        if ($post_id === 0)
        {
            $query = $this->db->get('create_post');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('create_post', array('post_id' => $post_id));
        return $query->row_array();
    }


 public function delete_post($post_id)
    {
        $this->db->where('post_id', $post_id);
        return $this->db->delete('create_post');
    }


public function get_post_content(){


        $this->db->select('*');
        $this->db->from('create_post');
        $this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();

        return $query->result_array();

        }






/* function goes above here */
}

 ?>

