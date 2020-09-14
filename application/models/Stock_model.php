<?php

class Stock_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $query = $this->db->get('tb_barang')->result_array();
    }
    public function cari_data_barang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('barcode', $keyword);
        // $this->db->or_like('catagory', $keyword);
        return $this->db->get('tb_barang')->result_array();
    }
}
