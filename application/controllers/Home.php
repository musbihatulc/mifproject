<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	private $user_login;
	function __construct(){
        parent::__construct();
		$this->load->model('user_model');
		$this->load->model('m_tables');
        $this->user_login = $this->user_model->login($this->session->userdata('username'))->row();
        // Cek apakah sudah logout jika iya direct ke login
        has_logout();
    }

	public function index()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$data['tm_users'] = $this->m_tables->get_where(["Th_Jabatan" => $this->input->post('th_jabatan')])->result();
		}
		$data['user_login'] = $this->user_login;
		$this->load->view('auth/header.php',$data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('home');
		$this->load->view('auth/footer.php');
	}
}