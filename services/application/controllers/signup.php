<?php
class Signup extends CI_controller
{
	public function validation()
	{
		$user['Firstname']=$this->input->get_post('Firstname');
		$user['Lastname']=$this->input->get_post('Lastname');
		$user['Prof_pic']=$this->input->get_post('Prof_pic');
		$user['EmailId']=$this->input->get_post('EmailId');
		$user['Password']=$this->input->get_post('Password');
		$user['DOB']=$this->input->get_post('DOB');
		$user['Gender']=$this->input->get_post('Gender');
		//print_r($user);
		
		$this->load->model('signupmodel');
		$this->signupmodel->signupService($user);
	}
	
}
?>