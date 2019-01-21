<?php 
 /**
  * 
  */
 class Logining_model extends CI_Model
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

 	public function check_data($id,$password){
 		//echo "Email is $id and Password is $password";
 		//$result1=$this->db->get_where('user',array('user_email='=>$id,'user_password='=>$password));
 		$result1=$this->db->query("Select * from user where user_email='$id' and user_password='$password'");
 		//echo "Number of rows is ".$result1->num_rows();
 		print_r($result1->result_array());
 		if($result1->num_rows()>0)
 		{
 			return $result1->result_array();
 		}else{
 			return FALSE;
 		}
 		//return $idOfInsertedData = $this->db->insert_id();
 	} 
 }
?>