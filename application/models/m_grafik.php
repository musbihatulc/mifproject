<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class m_grafik extends CI_Model 
{
    function grafik()
    {
        $this->db->group_by('Pangkat_gol_Rg');
        $this->db->select('Pangkat_gol_Rg');
        $this->db->select("count(*) as total");
        return $this->db->from('tm_user')->get()->result();
    }

    function grafik_tingkat()
    {
        $this->db->group_by('Tkt_ijazah_pend');
        $this->db->select('Tkt_ijazah_pend');
        $this->db->select("count(*) as jumlahs");
        return $this->db->from('tm_user')->get()->result();
    }
    
}
?>