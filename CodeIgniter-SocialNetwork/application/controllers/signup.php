<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: signup.php

 * Date and Time: Aug 9, 2016 1:38:40 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Signup extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('social_model');
    
    }
    
    function index()
  {
  $signup_insert_data = array(         //if validation passed (line 57 controller/login.php), post array data to db
   'first_name' => $this->input->post('first_name'),
   'last_name' => $this->input->post('last_name'),
   'username' => $this->input->post('username'),
   'password' => md5($this->input->post('password'))
      //make sure password is md5 or same in db
   ); 
   
   $this->db->insert('member_login', $signup_insert_data); //insert (insert is new_member_insert_data array) into membership table
   return $this->db->first_name();
   
   $this->load->view('login', $signup_insert_data);
  }
	
}
