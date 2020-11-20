<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_grafik extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_grafik');
    }

	function index()
	{
	  $data['hasil']=$this->m_grafik->grafik();
	  $this->load->view('auth/header.php');
	  $this->load->view('auth/sidebar.php');
	  $this->load->view('auth/topbar.php');
	  $this->load->view('grafik',$data);
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