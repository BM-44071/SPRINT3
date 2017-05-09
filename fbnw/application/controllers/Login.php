<?php 
	/**
	* 
	*/
	class Login extends CI_controller
	{
		
		public function loginControl()
		{
			$this->load->view('fb'); 
		}
		 public function emailControl()
		 {
			$this->load->view('fb2');
		}
		public function password()
		{
			$this->load->view('fb3');
		}
		public function home()
		{
			$this->load->view('homepage');
		}
		public function login1()
		{
			$user['EmailId']=$this->input->post('EmailId');
			$user['Password']=$this->input->post('Password');
			

			#print_r($user);
			$url='http://localhost/services/index.php/Login/loginService';
				//$url='http://php.trainees.baabtra.com/service3/index.php/Login/loginService';
			
			$option=array(
				'http' =>array(
					'header'=>"content-type: application/x-www-form-urlencoded\r\n",
					'method'=>'POST',
					'content'=>http_build_query($user),
					),
				);
			$context=stream_context_create($option);
			$result=file_get_contents($url,false,$context);
			$json=json_decode($result,true);
			// print_r($json);
			 $this->load->library('session');
			$this->session->set_userdata($json);
			if($json['ResponseCode']==200)
			{
				$this->load->view('fb5fake');
			}
			if ($json['ResponseCode']==500) 
			{
				$this->load->view('fb4',$json);
			}
			if ($json['ResponseCode']==404) 
			{
				$this->load->view('homepage');
			}
			}
			public function verify()
			{
				$this->load->view('emailverify');
			}
	}
 ?>