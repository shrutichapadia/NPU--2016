<?php

/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: signup.php

 * Date and Time: Aug 9, 2016 1:38:40 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Signup extends CI_Controller {

	function index()
	{
		$this->load->helper(array('signup', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password1', 'Password1', 'required|matches password2');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
		

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup');
		}
		else
		{
			$this->load->view('viewprofile');
		}
	}
}
