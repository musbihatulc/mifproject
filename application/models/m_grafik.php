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

    // public function GetPie() {
    //     $sql ="SELECT Pangkat_gol_Rg AS hasil, COUNT(*) total FROM tm_user GROUP BY Hasil";
    //     return $this->db->query($sql);
    // }
}
?>