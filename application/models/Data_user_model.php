<?php

class Data_user_model extends CI_Model
{
    public function getAlltb_pegawai()
    {
        return $query = $this->db->get('tb_pegawai')->result_array();
    }
}
