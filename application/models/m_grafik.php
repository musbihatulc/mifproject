<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class m_grafik extends CI_Model 
{
    private $table = "tm_user";

    public function grafik()
    {
        $this->db->group_by('Pangkat_gol_Rg');
        $this->db->select('Pangkat_gol_Rg');
        $this->db->select("count(*) as total");
        // return $this->db->from('tm_user')->get()->result();
        return $this->db->get($this->table)->result();
    }

    public function grafik_tingkat()
    {
        $this->db->group_by('Tkt_ijazah_pend');
        $this->db->select('Tkt_ijazah_pend');
        $this->db->select("count(*) as jumlahs");
        return $this->db->from('tm_user')->get()->result();
    }

    
    
}
?>