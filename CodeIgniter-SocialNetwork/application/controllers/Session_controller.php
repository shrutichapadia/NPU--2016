<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: logout.php

 * Date and Time: Aug 9, 2016 1:37:47 PM

 * Project Name: CodeIgniter-SocialNetwork


 */


class Session_controller extends CI_Controller {
    
        function __construct() {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        $this->load->model('social_model');
    
    }

public function index()
	{
            
          ($this->session->set_user_id('user_id', '$user_id'));
          ($this->session->set_username('username', '$username'));
                $this->load->view('session_view');
            
 
}
function unset_session_data()
{
  $this->session->unset_userdata('username');
   $this->session->unset_userdata('userid');
  $this->load->view('session_view');
  
}

}