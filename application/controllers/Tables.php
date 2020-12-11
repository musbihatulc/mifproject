<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

    private $user_login;
    function __construct()
    {
        parent::__construct();       
        $this->load->model('m_tables');
        $this->load->model('user_model');
        $this->user_login = $this->user_model->login($this->session->userdata('username'))->row();
        // Cek apakah sudah logout jika iya direct ke login
        has_logout();
    }  

	public function index()
	{
        $data['user_login'] = $this->user_login;
        $data['user'] = $this->m_tables->getAll();
		$this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('tables');
		$this->load->view('auth/footer.php');
    }

    public function simpan()
    {
        $data['user'] = $this->m_tables->getAll();
        $this->load->view('auth/header.php');
        $this->load->view('simpan', $data);
    }

    public function Tampilsimpan()
    {
        $data['user'] = $this->m_tables->getAll();
        $this->load->view('auth/header.php');
        $this->load->view('Tampilsimpan', $data);
    }

    public function detail($id)
    {
        $data['user_login'] = $this->user_login;
        $data['detail'] = $this->m_tables->detail($id);
		$this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('detail');
		$this->load->view('auth/footer.php');
    }

    public function opentambah()
    {
        $this->form_validation->set_rules('No','No','required|is_unique[tm_user.No]');
        $this->form_validation->set_rules('Nama','Nama','required');
        $this->form_validation->set_rules('NIP','NIP','required');
        $this->form_validation->set_rules('Pangkat_gol_Rg','Pangkat_gol_Rg','required');
        $this->form_validation->set_rules('Pangkat_tmt','Pangkat_tmt','required');
        $this->form_validation->set_rules('Nama_Jabatan','Nama_Jabatan','required');
        $this->form_validation->set_rules('Th_Jabatan','Th_Jabatan','required');
        $this->form_validation->set_rules('Th_Masa_Kerja','Th_Masa_Kerja','required');
        $this->form_validation->set_rules('Bln_Masa_Kerja','Bln_Masa_Kerja','required');
        $this->form_validation->set_rules('Nama_lt_jabatan','Nama_lt_jabatan','required');
        $this->form_validation->set_rules('Bln_thn_lt_jab','Bln_thn_lt_jab','required');
        $this->form_validation->set_rules('Jml_Jam_lt_jab','Jml_Jam_lt_jab','required');
        $this->form_validation->set_rules('Nama_pend','Nama_pend','required');
        $this->form_validation->set_rules('Th_lulus_pend','Th_lulus_pend','required');
        $this->form_validation->set_rules('Tkt_ijazah_pend','Tkt_ijazah_pend','required');
        $this->form_validation->set_rules('Usia','Usia','required');
        $this->form_validation->set_rules('Ctt_mutasi_kepeg','Ctt_mutasi_kepeg','required');
        $this->form_validation->set_rules('Ctt_prestasi','Ctt_prestasi','required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('auth/header.php');
            // $this->load->view('auth/sidebar.php');
            // $this->load->view('auth/topbar.php');
            $this->load->view('tambah');
            // $this->load->view('auth/footer.php');
                
        } else {
            $data = array(
                'No' => $this->input->post('No'),
                'Nama' => $this->input->post('Nama'),
                'NIP' => $this->input->post('NIP'),
                'Pangkat_gol_Rg' => $this->input->post('Pangkat_gol_Rg'),
                'Pangkat_tmt' => $this->input->post('Pangkat_tmt'),
                'Nama_Jabatan' => $this->input->post('Nama_Jabatan'),
                'Th_Jabatan' => $this->input->post('Th_Jabatan'),
                'Th_Masa_Kerja' => $this->input->post('Th_Masa_Kerja'),
                'Bln_Masa_Kerja' => $this->input->post('Bln_Masa_Kerja'),
                'Nama_lt_jabatan' => $this->input->post('Nama_lt_jabatan'),
                'Bln_thn_lt_jab' => $this->input->post('Bln_thn_lt_jab'),
                'Jml_Jam_lt_jab' => $this->input->post('Jml_Jam_lt_jab'),
                'Nama_pend' => $this->input->post('Nama_pend'),
                'Th_lulus_pend' => $this->input->post('Th_lulus_pend'),
                'Tkt_ijazah_pend' => $this->input->post('Tkt_ijazah_pend'),
                'Usia' => $this->input->post('Usia'),
                'Ctt_mutasi_kepeg' => $this->input->post('Ctt_mutasi_kepeg'),
                'Ctt_prestasi' => $this->input->post('Ctt_prestasi')
                );
            $this->m_tables->insertdata($data,'tm_user');
            redirect('Tables/index');
        }
    }
    
    
    public function hapus($id){
        $data = $this->m_tables->hapusdata($id);

        if ($data) {
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">
                    Data Berhasil Dihapus
            </div>');
            redirect('Tables');
        }else {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
                    Data Gagal Dihapus
            </div>');
            redirect('Tables');
        }
    }

    function edit($id){
        $data["datane"] = $this->m_tables->getById($id)->result();
        $this->load->view('auth/header.php');
        // $this->load->view('auth/sidebar.php');
        // $this->load->view('auth/topbar.php');
		$this->load->view('edit', $data);
		$this->load->view('auth/footer.php');
    }
    
    function update(){
		$No = $this->input->post('No');
        $Nama = $this->input->post('Nama');
        $NIP = $this->input->post('NIP');
        $Pangkat_tmt = $this->input->post('Pangkat_tmt');
	  
		$data = array(
            'No' => $No,
            'Nama' => $Nama,
            'Pangkat_tmt' => $Pangkat_tmt
		  
		  );
		$where = array(
		  'NIP' => $NIP
		);
  
		$this->m_tables->updatedata($where, $data,'tm_user');
		
		redirect('Tables');
	}
}