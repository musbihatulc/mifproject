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
		$this->load->model('m_grafik');
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
		$data['hasil']=$this->m_grafik->grafik();
		$data['total']=$this->m_grafik->grafik_tingkat();
		$data['user_login'] = $this->user_login;
		// $data['Nama'] = $this->m_tables->hitungNama();
		$data['a'] = $this->m_tables->usia('20','30')->num_rows();
		$data['b'] = $this->m_tables->usia('31','40')->num_rows();
		$data['c'] = $this->m_tables->usia('41','50')->num_rows();
		$data['d'] = $this->m_tables->usia('51','60')->num_rows();
		$data['Nama'] = $this->db->query("SELECT*FROM tm_user WHERE `status` = 'Aktif' ")->num_rows();
		// $this->db->query->("select * from tm_user where 'status=','Aktif'")->num_rows();
		$this->load->view('auth/header.php',$data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('home');
		$this->load->view('auth/footer.php');
	}

	// public function hitungN()
	// {
	// 	$data['Nama'] = $this->m_tables->hitungNama();
	// }
}