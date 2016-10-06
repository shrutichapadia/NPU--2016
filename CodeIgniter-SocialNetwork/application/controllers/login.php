<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: login.php

 * Date and Time: Aug 9, 2016 1:37:31 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Login extends CI_Controller {

       function __construct() {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('social_model');
    
    }
	public function view($login = 'login')
	{

	}
}
function index(){
    if($this->session->login('is_logged_in')){
        redirect('views/login');
    }else{
        $this->login(false);
    }
}
function login()
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

  ?>
  