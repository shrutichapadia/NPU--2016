<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Social_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function get_users($user_id) {
   $this->db->where('user_id', $user_id);
   $query = $this->db->get('social_user');
   
   return $query;
}

    function update_user($first_name, $last_name, $gender,$birthdate,$city,$state,$new_picture) {
        $this->db->get('user', $social_user);
        $username['username'] = $this->db->get('username');
        $password['password'] = $this->db->get('password');
        if($this->db->insert('new_picture',$new_picture)){
       $first_name['first_name'] = ($this->db->update('first_name', $first_name));
       $last_name['last_name'] = ($this->db->update('last_name', $last_name));   
       $gender['gender'] = ($this->db->update('gender', $gender));
       $birthdate['birthdate'] = ($this->db->update('birthdate', $birthdate));
       $city['city'] = ($this->db->update('city', $city));
       $state['state'] = ($this->db->update('state', $state));
       $new_picture['new_picture'] = ($this->db->update('new_picture', $new_picture));
        return true;} else
            return false;
       
       
    }

    function get_user($username, $password) {
        $this->db->get('user', $social_user);
        $username['username'] = $this->db->get('username');
        $password['password'] = $this->db->get('password');
 
        if($this->db->insert('password', $password)){
            return true;
        } else{
            return false;
        }
    
}

function get_user_by_username($username) {
    $this->db->get('user', $social_user);
        $username['username'] = $this->db->get('username');
        if($this->db->insert('username', $username)){
            return true;
        } else{
            return false;
        }
        
}
function get_user_by_userid($user_id) {
    $this->db->get('user', $social_user);
        $user_id['user_id'] = $this->db->get('user_id');
        if($this->db->insert('user_id', $user_id)){
            return true;
        } else{
            return false;
        }
        
}
    function add_user($username, $password) {
        $this->db->get('user', $social_user);
        $username['username'] = $this->db->add('username');
        $password['password'] = $this->db->add('password');
 
        if($this->db->insert('user_id', $user_id)){
            return user_id;
        } else{
            return false;
        }
}
}
function retrieve_user($user_id = '')
     {
     $this->db->where('user_id', $user_id);  // get users record
     $query = $this->db->get('user', $social_user);   // this would be changed to your users table name

      if($query->num_rows() > 0) {
        // return a single db row array $row['name'];
        return $query->row_array();
        // return a single db object $row->name;
        // return $q->row;      
      }
      return FALSE; 
  }
