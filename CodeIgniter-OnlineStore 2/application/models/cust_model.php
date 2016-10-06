<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class cust_model extends CI_Model{
    public function cust_model($data){
        
    }
    public function save_cust($data) {
        $this->db->insert('customer', $data);
        $order_data['cust_id'] = $this->db->insert_id();
        if ($this->db->insert('first_name', $cust_first_name)) {
            return true;
        } else {
            return false;
        }
    }
}