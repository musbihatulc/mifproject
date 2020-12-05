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
		$data['hasil']=$this->m_grafik->grafik();
		$this->load->view('auth/header.php',$data);
		$this->load->view('auth/sidebar.php');
		$this->load->view('auth/topbar.php');
		$this->load->view('grafik');
		$this->load->view('auth/footer.php');
	}

	// function pie()
	// {
	// 	foreach($this->m_grafik->GetPie()->result_array() as $row){
	// 		$data[] = array(
	// 			'hasil' =>$row['hasil'],
	// 			'total' =>$row['total']
	// 		);
	// 	}
	// 	// $data['pie_data']=$this->m_grafik->GetPie();
	// 	// $this->load->view('grafik',$data);
	// 	echo json_encode($data);
	// }
}
?>