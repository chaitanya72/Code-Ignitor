<?php
	/**
	 * 
	 */
	class Posts extends CI_Controller
	{
	
		/*function __construct(){
			$this->load->helper('form');
		}*/	
		public function index()
		{
			if(!empty($_REQUEST)){
			//$data['posts'] = $this->Post_model->get_posts();
			//print_r($data['posts']);
			$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('contact_firstname','Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('contact_lastname','Last Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('contact_email','email','required|trim|valid_email');
			$this->form_validation->set_rules('contact_phone','Phone Number','regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('contact_businesstype','Business Type','regex_match[/^[a-zA-Z]*$/]');

			if($this->form_validation->run()==TRUE)
			{




			//echo "I am in the loop";
			$contactus_id='';
			$contactus_firstname=$this->input->post('contact_firstname');
			$contactus_lastname=$this->input->post('contact_lastname');
			$contactus_email=$this->input->post('contact_email');
			$contactus_phone=$this->input->post('contact_phone');
			$contactus_comment=$this->input->post('contact_businesstype');
			//$this->load->model('Post_model')
			$data=array(
				'contactus_id'=>$contactus_id,
				'contactus_firstname' => $contactus_firstname,
				'contactus_lastname' => $contactus_lastname,
				'contactus_email' => $contactus_email,
				'contactus_phone' => $contactus_phone,
				'contactus_comment' => $contactus_comment
			);
			$id=$this->Post_model->insert_data($data);
			mail($contactus_email,'We will be Contacting','Thank You For your intrest in Our Pet Store.We will be contacting you.');

			$this->load->view('templet/header');
			$this->load->view('pages/Contactuscomplete.php');
			$this->load->view('templet/footer');
			return;
		}else
		{
			$this->load->view('templet/header');
			$this->load->view('posts/ContactUs');
			$this->load->view('templet/footer');
			return;
		}


			}
			$this->load->view('templet/header');
			$this->load->view('posts/ContactUs');
			$this->load->view('templet/footer');


		}

		/**  
		* 	This Function is used To insert Data Into the Client,User,Business Tables.
		*/

		public function client(){
			if(!empty($_REQUEST)){
			//$data['posts'] = $this->Post_model->get_posts();
			//print_r($data['posts']);
			
			$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('client_firstname','Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('client_lastname','Last Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('client_email','email','required|trim|valid_email');
			$this->form_validation->set_rules('client_phone','Phone Number','regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('client_businesstype','Business Type','regex_match[/^[a-zA-Z]*$/]');

			if ($this->form_validation->run() == TRUE)
                {
                        
                









			//echo "I am in the loop";
			$client_id='';
			$client_firstname=$this->input->post('client_firstname');
			$client_lastname=$this->input->post('client_lastname');
			//$client_email=$this->input->get('client_email');
			$client_email=$this->input->post('client_email');
			$client_phone=$this->input->post('client_phone');
			$client_businesstype=$this->input->post('client_businesstype');

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
			//Registration Successfull
			mail($client_email,'Subject','Your Password is 1234567','From:a@gmail.com');
			$this->load->view('templet/header');
			$this->load->view('pages/Registration');
			$this->load->view('templet/footer');
			return;

		}else{ //User Already Exists
			$this->load->view('templet/header');
			$this->load->view('pages/userthere');
			$this->load->view('templet/footer');
		}


			//$this->load->view('templet/header');
			//$this->load->view('pages/AboutUs');
			//$this->load->view('templet/footer');

			
			}
				//Validation Else
                else
                {
                        $this->load->view('templet/header');
						$this->load->view('posts/Client');
						$this->load->view('templet/footer');
						return;
                }





			}// Enf of $REQUEST

			$this->load->view('templet/header');
			$this->load->view('posts/Client');
			$this->load->view('templet/footer');
		}



		/**  
		* 	This Function is used To insert Data Into the Client,User,Business Tables.
		*/


		public function business(){
			if(!empty($_REQUEST)){
			//$data['posts'] = $this->Post_model->get_posts();
			//print_r($data['posts']);

			$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_firstname','Name','required|regex_match[/^[a-zA-Z]*$/]');
			$this->form_validation->set_rules('service_lastname','Last Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('service_email','email','required|trim|valid_email');
			$this->form_validation->set_rules('service_phone','Phone Number','regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('service_businesstype','Business Type','regex_match[/^[a-zA-Z]*$/]');

			if ($this->form_validation->run() == TRUE)
                {
                        
                
			
                










			//echo "I am in the loop";
			$client_id='';
			$client_firstname=$this->input->post('service_firstname');
			$client_lastname=$this->input->post('service_lastname');
			$client_email=$this->input->post('service_email');
			//$client_email=$this->input->get('client_email');
			$client_phone=$this->input->post('service_phone');
			$client_businesstype=$this->input->post('service_businesstype');

			//echo "The Email is ".$client_firstname;
			//$this->load->model('Post_model')
			$data=array(
				'user_userid'=>'',
				'user_password' => '1234567',
				'user_email' => $client_email,
				'user_roletype' => 'Business'
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
			//Registeration Sucessful
			$this->load->view('templet/header');
			$this->load->view('pages/Registration');
			$this->load->view('templet/footer');
			return;

		}else{ //User Already Exists
			$this->load->view('templet/header');
			$this->load->view('pages/userthere');
			$this->load->view('templet/footer');
			return;
		}


			//$this->load->view('templet/header');
			//$this->load->view('pages/AboutUs');
			//$this->load->view('templet/footer');

			}
			    //Validation Else
                else
                {
                        $this->load->view('templet/header');
						$this->load->view('posts/Business');
						$this->load->view('templet/footer');
						return;
                }




		}//End of $_REQUEST

			$this->load->view('templet/header');
			$this->load->view('posts/Business');
			$this->load->view('templet/footer');	

		}
	
		public function validation(){
			$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('client_firstname','Name','required|regex_match[/^[a-zA-Z]+$/]');
			$this->form_validation->set_rules('client_lastname','Last Name','required');
			$this->form_validation->set_rules('client_email','email','required|trim|valid_email|xss_clean');
			$this->form_validation->set_rules('client_phone','Phone Number','regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('client_businesstype','Business Type','regex_match[/^[a-zA-Z]*$/]');

			if ($this->form_validation->run() == TRUE)
                {
                        
                }
                else
                {
                        $this->load->view('');
                }
		}



		public function login(){

			if(isset($_SESSION['client_id']))
			{
				$this->load->view('templet/header');
				$this->load->view('posts/Clientlog');
				$this->load->view('templet/footer');
				return;
			}

			if(isset($_SESSION['business_id']))
			{
				$this->load->view('templet/header');
				$this->load->view('posts/Businesslog');
				$this->load->view('templet/footer');
				return;

			}



			if(!empty($_REQUEST)){
			$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('login_email','email','required|trim|valid_email');
			$this->form_validation->set_rules('login_password','Last Name','required');

			if ($this->form_validation->run() == TRUE){

				$user_email=$this->input->post('login_email');
				$user_password=$this->input->post('login_password');
				//echo "The email received is $user_email";
				$data=$this->Logining_model->check_data($user_email,$user_password);
				if($data==FALSE){
					echo "Password mismatch";
					$this->load->view('templet/header');
				$this->load->view('pages/error');  //Printb the login mismatch page
				$this->load->view('templet/footer');

				}else{
					$id2=$data[0]['user_userid'];
					$role=$data[0]['user_roletype'];
					if($role=='Client')
					{$_SESSION['client_id']=$id2;
					  $this->load->view('templet/header');
					  $this->load->view('posts/Clientlog');
					  $this->load->view('templet/footer');

					}
					else{
						$_SESSION['business_id']=$id2;
						$this->load->view('templet/header');
						$this->load->view('posts/Businesslog');
						$this->load->view('templet/footer');



					}
				}


			}else{
				$this->load->view('templet/header');
				$this->load->view('posts/Login');
				$this->load->view('templet/footer');
				return;
			}



			}else{
				//echo "The request is coming empty";
				$this->load->view('templet/header');
				$this->load->view('posts/Login');
				$this->load->view('templet/footer');
			}
		}


		public function loginclient(){
			
			if(!isset($_SESSION['client_id']))
			{
				$this->load->view('templet/header');
				$this->load->view('posts/Login');
				$this->load->view('templet/footer');
				return;
			}



			if(!empty($_REQUEST)){
				$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('clientpet_clientname','Name','regex_match[/^[a-zA-Z]*$/]');
			$this->form_validation->set_rules('clientpet_mypet','Last Name','required|regex_match[/^[a-zA-Z]*$/]');

			if ($this->form_validation->run() == TRUE){

				$clientname=$this->input->post('clientpet_clientname');
				$petname=$this->input->post('clientpet_mypet');
				$clientid=$_SESSION['client_id'];
				$data=array(
					'pet_id'=>'',
					'pet_name'=>$petname,
					'pet_clientname'=>$clientname,
					'pet_userid'=>$clientid
				);
				$id=$this->Clientpet_model->insert_data($data);
				$this->load->view('templet/header');
				$this->load->view('pages/clientlogenter'); //Send the data added message
				$this->load->view('templet/footer');
				return;

			}else{
				$this->load->view('templet/header');
				$this->load->view('posts/Clientlog');
				$this->load->view('templet/footer');
				return;
			}


			}else{
				$this->load->view('templet/header');
				$this->load->view('posts/Clientlog');
				$this->load->view('templet/footer');
			}
		}



		public function loginbusiness(){

			if(!isset($_SESSION['business_id']))
			{
				$this->load->view('templet/header');
				$this->load->view('posts/Login');
				$this->load->view('templet/footer');
				return;
			}





			if(!empty($_REQUEST)){
				$this->load->helper('form');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('business_name','Name','regex_match[/^[a-zA-Z]*$/]');
			$this->form_validation->set_rules('business_service','Last Name','required|regex_match[/^[a-zA-Z]*$/]');

			if ($this->form_validation->run() == TRUE){

				$businessname=$this->input->post('business_name');
				$business=$this->input->post('business_service');
				$clientid=$_SESSION['business_id'];
				$data=array(
					'business_id'=>'',
					'business_name'=>$businessname,
					'business_clientid'=>$clientid,
					'business_service'=>$business
				);
				$id=$this->Businesslog_model->insert_data($data);
				$this->load->view('templet/header');
				$this->load->view('pages/businesslogenter');
				$this->load->view('templet/footer');
				return;

			}else{
				$this->load->view('templet/header');
				$this->load->view('posts/Clientlog');
				$this->load->view('templet/footer');
				return;
			}


			}else{
				$this->load->view('templet/header');
				$this->load->view('posts/Clientlog');
				$this->load->view('templet/footer');
			}
		}


		public function log()
		{
			if(isset($_SESSION['client_id']))
			{
				unset($_SESSION['client_id']);
			}
			if(isset($_SESSION['business_id']))
			{
				unset($_SESSION['business_id']);
			}

			$this->load->view('templet/header');
			$this->load->view('posts/Login');
			$this->load->view('templet/footer');
		}








	}

?>