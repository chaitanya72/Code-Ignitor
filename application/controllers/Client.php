<?php

class Client extends CI_Controller{
	
	public function client1(){
			if(!empty($_REQUEST)){
			//$data['posts'] = $this->Post_model->get_posts();
			//print_r($data['posts']);
			echo "I am in the loop";
			$client_id='';
			$client_firstname=$this->input->get('client_firstname');
			$client_lastname=$this->input->get('client_lastname');
			$client_email=$this->input->get('client_email');
			$client_email=$this->input->get('client_email');
			$client_phone=$this->input->get('client_phone');
			$client_businesstype=$this->input->get('client_businesstype');

			echo "The Email is ".$client_firstname;
			//$this->load->model('Post_model')
			$data=array(
				'user_userid'=>'',
				'user_password' => '1234567',
				'user_email' => $client_email,
				'user_roletype' => 'Client'
			);

			/*$data=array(
				'client_id'=>$contactus_id,
				'client_firstname' => $client_firstname,
				'client_lastname' => $client_lastname,
				'client_email' => $client_email,
				'client_phone' => $client_phone,
				'client_businesstype' => $client_businesstype
			);*/
			$id=$this->User_model->insert_data($data);
			if($id!=FALSE){
			$data1=array(
				'client_id'=> '',
				'client_firstname' => $client_firstname,
				'client_lastname' => $client_lastname,
				'client_phone' => $client_phone,
				'client_email' => $client_email,
				//'client_phone' => $client_phone,
				'client_userid' => $id
			);

			$clientid=$this->Client_model->insert_data($data1);

			$data2=array(
				'business_id'=>'',
				'business_name' => $client_businesstype,
				'business_clientid' => $clientid,
				'business_service' => ''
				//'client_phone' => $client_phone,
				//'client_businesstype' => $client_businesstype
			);

			$businessid=$this->Business_model->insert_data($data2);

			$this->load->view('templet/header');
			$this->load->view('pages/Registration');
			$this->load->view('templet/footer');

		}else{
			$this->load->view('templet/header');
			$this->load->view('pages/userthere');
			$this->load->view('templet/footer');
		}


			//$this->load->view('templet/header');
			//$this->load->view('pages/AboutUs');
			//$this->load->view('templet/footer');

			}

			$this->load->view('templet/header');
			$this->load->view('posts/Client');
			$this->load->view('templet/footer');
		}
}


?>