<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

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
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('m_tables');
        $this->user_login = $this->user_model->login($this->session->userdata('username'))->row();
        // Cek apakah sudah logout jika iya direct ke login
        has_logout();
    }

    public function index()
    {
        $data['user_login'] = $this->user_login;
        $jenis = $this->input->post('jenis');
        $tahun = $this->input->post('tahun');
        $data['report'] = $this->db->query("SELECT * FROM `tm_user`  WHERE `status`='Tidak Aktif'")->result();
        $this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
        $this->load->view('report', $data);
        $this->load->view('auth/footer.php');
       
    }
    public function filter(){
        $data['user_login'] = $this->user_login;


        $jenis = $this->input->post('jenis');
        $tahun = $this->input->post('tahun');
        if ($this->input->post('submit')) {
            if ($jenis == null || $tahun == null) {
                $data['report'] = $this->db->query("SELECT * FROM `tm_user`  WHERE `status`='Tidak Aktif'")->result();
                $this->load->view('auth/header.php', $data);
                $this->load->view('auth/sidebar.php');
                $this->load->view('auth/topbar.php');
                $this->load->view('report', $data);
                $this->load->view('auth/footer.php');
            } else if ($jenis == 'Aktif' && $tahun != 'All') {
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis' AND Th_Jabatan BETWEEN DATE(NOW()) - INTERVAL '$tahun' YEAR AND DATE(NOW())")->result();
                $this->load->view('auth/header.php', $data);
                $this->load->view('auth/sidebar.php');
                $this->load->view('auth/topbar.php');
                $this->load->view('report', $data);
                $this->load->view('auth/footer.php');
            } else if ($jenis == 'Tidak Aktif' && $tahun != 'All') {
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis' AND tgl_mutasi BETWEEN DATE(NOW()) - INTERVAL '$tahun' YEAR AND DATE(NOW())")->result();
                $this->load->view('auth/header.php', $data);
                $this->load->view('auth/sidebar.php');
                $this->load->view('auth/topbar.php');
                $this->load->view('report', $data);
                $this->load->view('auth/footer.php');
            } else if ($tahun == 'All') {
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis'")->result();
                $this->load->view('auth/header.php', $data);
                $this->load->view('auth/sidebar.php');
                $this->load->view('auth/topbar.php');
                $this->load->view('report', $data);
                $this->load->view('auth/footer.php');
            }
        } else if ($this->input->post('submit2')) {
            if ($jenis == null || $tahun == null) {
                $data['judul'] = 'Tidak Aktif';
                $data['report'] = $this->db->query("SELECT * FROM `tm_user`  WHERE `status`='Tidak Aktif'")->result();
                $this->load->view('auth/header.php');
                $this->load->view('print', $data);
            } else if ($jenis == 'Aktif' && $tahun != 'All') {
                $data['judul'] = $jenis;
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis' AND Th_Jabatan BETWEEN DATE(NOW()) - INTERVAL '$tahun' YEAR AND DATE(NOW())")->result();
                $this->load->view('auth/header.php');
                $this->load->view('print', $data);
            } else if ($jenis == 'Tidak Aktif' && $tahun != 'All') {
                $data['judul'] = $jenis;
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis' AND tgl_mutasi BETWEEN DATE(NOW()) - INTERVAL '$tahun' YEAR AND DATE(NOW())")->result();
                $this->load->view('auth/header.php');
                $this->load->view('print', $data);
            } else if ($tahun == 'All') {
                $data['judul'] = $jenis;
                $data['report'] = $this->db->query("SELECT * FROM `tm_user` WHERE `status`='$jenis'")->result();
                $this->load->view('auth/header.php');
                $this->load->view('print', $data);
            }
        }
    }



    public function detail()
    {
        $data['user_login'] = $this->user_login;
        $id = $this->uri->segment(3);
        $data['detail'] = $this->db->query("SELECT * FROM tm_user JOIN data_diri ON tm_user.NIP=data_diri.NIP
        WHERE tm_user.NIP='$id'")->result();
        $this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
        $this->load->view('detail_datadiri', $data);
        $this->load->view('auth/footer.php');
    }
}
