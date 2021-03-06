<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class m_tables extends CI_Model { 
    private $table = "tm_user";
    
    public function get_where($where){
        $this->db->order_by('Nama', 'ASC');
        return $this->db->get_where($this->table, $where);
    }
    function status($id,$status,$tgl){
		$query = $this->db->query("UPDATE `tm_user` SET `status`='$status', `Tgl_mutasi`='$tgl' WHERE NIP='$id'");
	}
    function status2($id,$status,$tgl){
		$query = $this->db->query("UPDATE `tm_user` SET `status`='$status', `Tgl_mutasi`='$tgl' WHERE NIP='$id'");
	}
    public function getAll()
    {
        $this->db->join('golongan','tm_user.Pangkat_gol_Rg=golongan.golongan');
  
        $this->db->where('status=','Aktif');
        $this->db->order_by('golongan.id', 'DESC');
        return $this->db->get($this->table)->result();
    }

    public function hitungNama()
    {
        $this->db->like('Nama', '1');
        $this->db->from('tm_user');
        echo $this->db->count_all_results();
    }

    public function usia($from,$to){
        $this->db->where('Usia BETWEEN '.$from.' AND '.$to);
        $this->db->from('tm_user');
        return $this->db->get();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getById($id)
    {
        $this->db->where('NIP', $id);
        $this->db->from('tm_user');
        return $this->db->get();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("NIP" => $id));
    }

    function insertdata($data, $table)
	{
        $this->db->insert($table, $data); //masukkan data jenis surat ke database
        
    }

    public function detail($id){
        $this->db->join('data_diri','tm_user.NIP=data_diri.NIP');
        return $this->db->get_where("tm_user" , [
            'tm_user.NIP' => $id
        ])->result_array();
    }
    public function detail2($id){
      
        return $this->db->get_where("tm_user" , [
            'NIP' => $id
        ])->result_array();
    }

    public function hapusdata($id){
        $this->db->where('NIP' , $id);
        return $this->db->delete('tm_user');
    }
    public function update($data= array(),$id){
        $this->load->database();
        return $this->db->update("tm_user",$data , ["NIP"=>$id]);
    }

    function updatedata( $where, $data, $table)
	{
    $this->db->where($where);
    $this->db->update($table, $data); 
    }
    
    
 }
?> 