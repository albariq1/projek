<?php

class Stock_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $query = $this->db->get('tb_barang')->result_array();
    }
}
