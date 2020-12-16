
<?php 
 defined('BASEPATH') or exit('No direct script access allowed');
class m_datadiri extends CI_Model{


	
    private $_table = "data_diri";
    public $NIP;
    public $Alamat;
    public $TTL;
    public $Status_pernikahan;
    public $No_telp;
    public $Jenis_kelamin;
    public $Agama;
    public $Gambar = 'LOGOKEJARI.png';
	function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ]
        ];
    }
    


function update($NIP)
{
    $post = $this->input->post();
    $this->NIP = $post['NIP'];
    $this->Alamat =$post['Alamat'];
    $this->TTL = $post['TTL'];
    $this->Status_pernikahan = $post['Status_pernikahan'];
    $this->No_telp = $post['No_telp'];
    $this->Jenis_kelamin = $post['Jenis_kelamin'];
    $this->Agama = $post['Agama'];
    if (!empty($_FILES["Gambar"]["name"])) {
        if ($post["oldfoto"] != 'LOGOKEJARI.png') {
        }
        unlink(FCPATH . 'assets/img/' . $post['oldfoto']);
        $this->gambar = $this->_uploadImage();
    } else {
        $this->gambar = $post["oldfoto"];
    }
    
    $this->db->update($this->_table, $this, array("NIP" => $NIP));
}
private function _uploadImage()
{
    $config['upload_path']          =  './assets/img/';
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

    return "camera.jpg";
}
}
