<?php 
 /**
  * 
  */
 class Post_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		$this->load->database();
 	}

 	public function get_posts($slug=FALSE){
 		if($slug===FALSE){
 			$query= $this->db->get('contactus');
 			return $query->result_array();
 		}
 	}

 	public function insert_data($data){
 		$this->db->insert('pet',$data);
 		if($query==FALSE){return FALSE;}
 		return $idOfInsertedData = $this->db->insert_id();
 	} 
 }
?>