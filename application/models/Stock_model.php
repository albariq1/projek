<?php

class Stock_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $this->db->query("SELECT * FROM `tb_barang` INNER JOIN tb_catagory on tb_barang.id_catagory = tb_catagory.id WHERE tb_barang.id_catagory")->result_array();
        // return $query = $this->db->get('tb_barang')->result_array();
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
