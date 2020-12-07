<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_grafik extends CI_Controller {

	private $user_login;
    function __construct(){
        parent::__construct();
		$this->load->model('m_grafik');
		$this->load->model('user_model');
        $this->user_login = $this->user_model->login($this->session->userdata('username'))->row();
        // Cek apakah sudah logout jika iya direct ke login
        has_logout();
    }

	function index()
	{
		$data['user_login'] = $this->user_login;
		$this->load->view('auth/header.php',$data);
		$this->load->view('auth/sidebar.php');
		$this->load->view('auth/topbar.php');
		$this->load->view('auth/footer.php');
	}

	function pangkat()
	{
		$data['user_login'] = $this->user_login;
		$data['hasil']=$this->m_grafik->grafik();
		$this->load->view('auth/header.php',$data);
		// $this->load->view('auth/sidebar.php');
		// $this->load->view('auth/topbar.php');
		$this->load->view('grafik');
		$this->load->view('auth/footer.php');
	}

	function simpanpangkat()
	{
		$data['hasil'] = $this->m_grafik->grafik();
        $this->load->view('auth/header.php');
        $this->load->view('simpan_pangkat', $data);
	}

	function tingkat()
	{
		$data['user_login'] = $this->user_login;
		$data['total']=$this->m_grafik->grafik_tingkat();
		$this->load->view('auth/header.php',$data);
		// $this->load->view('auth/sidebar.php');
		// $this->load->view('auth/topbar.php');
		$this->load->view('grafik_ijazah');
		$this->load->view('auth/footer.php');
	}

	public function SimpanIjazah()
    {
        $data['total'] = $this->m_grafik->grafik_tingkat();
        $this->load->view('auth/header.php');
        $this->load->view('simpan_ijazah', $data);
    }
}
?>