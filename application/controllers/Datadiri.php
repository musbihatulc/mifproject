<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadiri extends CI_Controller {

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
		$this->load->model('m_datadiri');
        $this->user_login = $this->user_model->login($this->session->userdata('username'))->row();
        // Cek apakah sudah logout jika iya direct ke login
        has_logout();
    }

    public function index() {
        $data['user_login'] = $this->user_login;
        $data['user'] = $this->db->query("SELECT * FROM `tm_user` WHERE tm_user.NIP NOT IN (SELECT data_diri.NIP FROM data_diri)")->result();
		$this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('datadiri', $data);
		$this->load->view('auth/footer.php');
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->db->where('NIP' , $id);
        $this->db->delete('tm_user');
        redirect('Datadiri');
    }

    public function detail(){
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

    public function tambah(){
        $data['user_login'] = $this->user_login;
        $id = $this->uri->segment(3);
        $data['tambah'] = $this->db->query("SELECT * FROM tm_user JOIN data_diri ON tm_user.NIP=data_diri.NIP
        WHERE tm_user.NIP='$id'")->result();
		$this->load->view('auth/header.php', $data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('tambah_diri');
		$this->load->view('auth/footer.php');
    }
    public function edit($NIP = null){
		if ($this->input->post('submit')) {
            $this->m_datadiri->update($NIP);
            echo "<script>
	                alert('Edit Data Diri berhasil');	
	                window.location.href = '".base_url('Datadiri')."';
				</script>";//Url tujuan
        }
	}

   public function editdiri(){
    $data['user_login'] = $this->user_login;
       $id = $this->uri->segment(3);
        $data["dataku"] = $this->db->query("SELECT * FROM data_diri WHERE NIP='$id'")->result();
        $this->load->view('auth/header.php',$data);
        $this->load->view('auth/sidebar.php');
        $this->load->view('auth/topbar.php');
		$this->load->view('edit_diri', $data);
		$this->load->view('auth/footer.php');
    }
    public function tambahdiri()
    {
        $this->form_validation->set_rules('NIP','NIP','required');
        $this->form_validation->set_rules('Alamat','Alamat','required');
        $this->form_validation->set_rules('TTL','TTL','required');
        $this->form_validation->set_rules('Status_pernikahan','Status_pernikahan','required');
        $this->form_validation->set_rules('No_telp','No_telp','required');
        $this->form_validation->set_rules('Jenis_kelamin','Jenis_kelamin','required');
        $this->form_validation->set_rules('Agama','Agama','required');
        if($this->form_validation->run() === FALSE){
            $data['user_login'] = $this->user_login;
            $this->load->view('auth/header.php', $data);
            $this->load->view('auth/sidebar.php');
            $this->load->view('auth/topbar.php');
            $this->load->view('tambah_diri');
            $this->load->view('auth/footer.php');
                
        } else {
            $data = array(
                'NIP' => $this->input->post('NIP'),
                'Alamat' => $this->input->post('Alamat'),
                'TTL' => $this->input->post('TTL'),
                'Status_pernikahan' => $this->input->post('Status_pernikahan'),
                'No_telp' => $this->input->post('No_telp'),
                'Jenis_kelamin' => $this->input->post('Jenis_kelamin'),
                'Agama' => $this->input->post('Agama'),
                'Gambar' => $this->_uploadImage()
                );
            $this->db->insert('data_diri',$data);
            redirect('Datadiri/index');
        }
    }
    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/img';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['Gambar']['name'];
        // 1MB
        // $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('Gambar')) {
            return $this->upload->data("file_name");
        }
        return "LOGOKEJARI.png";
	}	
    
}