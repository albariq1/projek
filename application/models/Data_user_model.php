<?php

class Data_user_model extends CI_Model
{
    public function getAlltb_pegawai()
    {
        return $query = $this->db->get('tb_pegawai')->result_array();
    }
    public function hapus_data_user($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tb_pegawai');
    }
}
