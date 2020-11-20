<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class m_tables extends CI_Model { 
    private $table = "tm_user";

    public function getAll()
    {
        $this->db->order_by('No', 'ASC');
        return $this->db->get($this->table)->result();
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