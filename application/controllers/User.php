<?php
    class User extends CI_Controller{
    function __construct(){
        parent:: __construct();    
        $this->load->model('user_model');
        $this->load->helper('url','form');
        $this->load->library(array('form_validation','session'));
        if ($this->uri->segment(2) != 'logout') {
            // Cek apakah sudah login jika iya direct ke Tables
            has_login();
        }
    }
        // Register user
        public function register(){
            $data['title'] = 'Daftar';

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]|valid_email');
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('auth/header');
                $this->load->view('register', $data);
            } else {
                // Encrypt password
                $enc_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                $this->user_model->register($enc_password);

                // Set message
                $this->session->set_flashdata('message', '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        You are now registered and can log in
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');

                redirect('user/login');
            }
        }

        // Log in user
        public function login(){
            $data['title'] = 'Masuk';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('auth/header');                    
                $this->load->view('login', $data);
                    
            } else {
                
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = $this->input->post('password');

                // Login user
                $user = $this->user_model->login($username)->row();         

                if($user){
                    if (password_verify($password, $user->password)) {
                        // Create session
                        $user_data = array(
                            'user_id' => $user_id,
                            'username' => $username,
                            'logged_in' => true
                        );

                        $this->session->set_userdata($user_data);

                        // Set message
                        $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');

                        redirect('tables');
                    }else{
                        // Set message
                        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">password salah!</div>');

                        redirect('user/login');
                    }
                } else {
                    // Set message
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">username salah!</div>');

                    redirect('user/login');
                }        
            }
        }

        // Log user out
        public function logout(){
            // Unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // Set message
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">You are now logged out</div>');

            redirect('user/login');
        }

        // Check if username exists
        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 'Username Sudah diambil. Silahkan gunakan username lain');
            if($this->user_model->check_username_exists($username)){
                return true;
            } else {
                return false;
            }
        }

        // Check if email exists
        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'Email Sudah diambil. Silahkan gunakan email lain');
            if($this->user_model->check_email_exists($email)){
                return true;
            } else {
                return false;
            }
        }
    }
