<?php

/* 


 * Student Info: Name=ShrutiChapadia, ID=15574CS

 * Subject: CS526(B)_HWNo4_WK12_Summer_2016

 * Author: shruti

 * Filename: user.php

 * Date and Time: Aug 18, 2016 4:21:24 PM

 * Project Name: CodeIgniter-SocialNetwork


 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
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
         $this->load->library('form_validation');
         $this->form_validation->set_error_delimiters('','<br/>');
         $this->form_validation->set_rules('user_id','user_id','required |min_length[1]|max_length[32]|integer');
         $this->form_validation->set_rules('username','username','required |min_length[1]|max_length[32]|integer');
    
         if($this->form_validation->run()==FALSE){
             $data['query']= $this->shop_model->get_users();
             $this->load->view('user_page');
         } else{
             $data['query']= $this->shop_model->get_users();
             $this->load->view('user_page');
         }
         
         
  }
    
  }