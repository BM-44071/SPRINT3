<?php
class Signup0 extends CI_controller
{
	public function signupfunction()
	{
    
		$user['Firstname']=$this->input->post('Firstname');
		$user['Lastname']=$this->input->post('Lastname');
		$EmailId=$user['EmailId']=$this->input->post('EmailId');
		$user['password']=$this->input->post('Password');
		  //$user['filename']=$_FILES['img1']['name'];
		// $user['filesize']=$_FILES['img1']['size'];
		$user['DOB']=$this->input->post('date')."-".$this->input->post('month')."-".$this->input->post('year');
		$user['Gender']=$this->input->post('Gender');
		$config['upload_path'] = './profile_pic/';
		$config['allowed_types'] ='gif|png|jpg';
		$config['max_size']  = 500;
		$config['max_width']  = 1024;
		$config['max_height'] = 768;
		$this->load->library('session');

		//$this->session->set_userdata($user);

		 $this->load->library('upload',$config);

		if($this->upload->do_upload('img1'))
		{
$upload_data=$this->upload->data();
$file_name=$upload_data['file_name'];
		}
		else{
      print_r("error");
      $file_name="";

		}
    $user['Prof_pic']=$file_name;
		// $url='http://localhost/services/index.php/Signup/validation';
     $urlserve='http://localhost/services/index.php/Signup/validation';
		 // $option= array(array(
			//  'http'=>"content-type: application/x-www-form-urlencoded\r\n",
			//  'method'=>"POST",
			//  'content'=>http_build_query($user),
			//  )
		
   //   );
    
        // $option=array('wrapper' => array ('notification' => 'callback','http'=>"content-type: application",
        // 'method'=>"POST",
        // 'content'=>http_build_query($user)));
     $opts=array('http'=>array('header'=>"content-type:application/x-www-form-urlencoded\r\n",'method'=>'POST','content'=>http_build_query($user),),);

    //  $opts = array('http' => array(
    // 'method' => "GET",
    // 'header' => "User-Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0\r\n"
    // . "Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n"
    // . "Accept-Encoding:gzip, deflate\r\n"
    // . "Accept-Language:cs,en-us;q=0.7,en;q=0.3\r\n"
    // . "Connection:keep-alive\r\n"
    // . "Host:your.domain.com\r\n"
    // ));


          $context = stream_context_create($opts);
    

          $result=file_get_contents($urlserve,false,$context);
          //print_r($result);
          $json=json_decode($result,true);
          // print_r($result);
          $this->load->library('session');
          $this->session->set_userdata($json);
          $this->load->view('spr3fb2',$json);
           // if($json['ResponseCode']==101)
          // {
          	// echo "<script>alert('first name should have greater than 3 letters')</script>";
          	// $this->load->view('fb');
          // }
          // else if($json['ResponseCode']==150)
          // {
          	/*echo "<script>alert('Enter you last name')</script>";
          	$this->load->view('fb');

          }
       else if($json['ResponseCode']==170)
       {
        	echo "<script>alert('Enter your email')</script>";
        	$this->load->view('fb'); 
       }
         else if($json['ResponseCode']==102)
         {
         
         	echo "<script>alert('email and reenter email are not match')</script>";
         	$this->load->view('fb'); 
         }
          else if($json['ResponseCode']==103)
          {
          	echo "<script>alert('not valid')</script>";
          	$this->load->view('fb');
          }
          else if($json['ResponseCode']==107)
          {
          	echo "<script>alert('choose profile pic')</script>";
          	$this->load->view('fb');
          } 
           else if($json['ResponseCode']==104)
           {
           	echo "<script>alert('maximum size of the profile pic is 5mb')</script>";
           	$this->load->view('fb');
           }
           else if($json['ResponseCode']==106)
           {
           	echo "<script>alert('choose your date of birth')</script>";
            $this->load->view('fb');
           }
           else if($json['ResponseCode']==105)
           {
            echo "<script>alert('the minimum age for joining facebook is 13 years')</script>";
            $this->load->view('fb');
           }
           else if($json['ResponseCode']==171)
           {
            echo "<script>alert('select your gender')</script>";
            $this->load->view('fb');
           }
           else
           {
              $config=array(Array(
                'crlf'=>'\r\n',
                'newline'=>'\r\n',
                'protocol'=>'smtp',
                'smtp_host'=>'ssl://smtp.googlemail.com',
                'smtp_port'=>465,
                'smtp_user'=> 'k.smruthi.smruthi@gmail.com',
                'smtp_pass'=>'sidhu485'
                'mailtype'=>'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => true
                ));
      $this->load->library('email',$config);
      $this->email->initialize($config);
      $message = 'hi';
      $this->email->set_newline("\r\n");

       $this->email->from('k.smruthi.smruthi@gmail.com');
        $this->email->to($EmailId);
         $this->email->subject('Verification message from facebook');
          $this->email->message($message);
          ->set_mailtype('html');
          if( $this->email->send())
          {
             $this->load->view('emailvfy');
             echo"mail send";
          }

           else
           {
            show_error($this->email->print_debugger());
           }
           }*/


          }

	}
?>