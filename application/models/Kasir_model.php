<?php

class Kasir_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $query = $this->db->get('tb_barang')->result_array();
    }

    public function list_keranjang()
    {
        // $this->db->get('tb_penjualan_detail')->result_array();
        // $this->db->where('status', 'keranjang');
        $this->db->select('tb_penjualan_detail.*,tb_barang.*');
        $this->db->from('tb_penjualan_detail');
        $this->db->join('tb_barang', 'tb_barang.id = tb_penjualan_detail.id_barang', 'left');
        return $query = $this->db->get()->result_array();
    }
    public function insert_keranjang()
    {
        $id_barang = $this->input->post('id_barang', true);
        $qty = $this->input->post('qty', true);
        $harga = $this->input->post('harga_jual');
        $total_harga = (int)$qty * (int)$harga;
        $data = [
            "id_barang" => $id_barang,
            "qty" => $this->input->post('qty', true),
            "total_harga" => $total_harga,
            "status" => 'keranjang'
        ];
        $this->db->insert('tb_penjualan_detail', $data);
    }
}
