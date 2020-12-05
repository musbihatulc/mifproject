<?php
 class User_model extends CI_Model{
  public function register($enc_password){
   // User data array
   $data = array(
    'nama' => $this->input->post('nama'),
    'email' => $this->input->post('email'),
    'username' => $this->input->post('username'),
    'password' => $enc_password,
   );

   // Insert user
   return $this->db->insert('user', $data);
  }

  // Log user in
  public function login($username){

    // Validate
   $this->db->where('username', $username);

   return $result = $this->db->get('user');
  }

  // Check username exists
  public function check_username_exists($username){
   $query = $this->db->get_where('user', array('username' => $username));
   if(empty($query->row_array())){
    return true;
   } else {
    return false;
   }
  }

  // Check email exists
  public function check_email_exists($email){
   $query = $this->db->get_where('user', array('email' => $email));
   if(empty($query->row_array())){
    return true;
   } else {
    return false;
   }
  }
 }