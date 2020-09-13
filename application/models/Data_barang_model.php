<?php

class Data_barang_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $query = $this->db->get('tb_barang')->result_array();
    }

    public function tambah_data_barang()
    {

        $data = [
            "barcode"     => $this->input->post('barcode', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "stock_awal"       => $this->input->post('stock', true),
            "harga_beli"  => $this->input->post('harga_beli', true),
            "harga_jual"  => $this->input->post('harga_jual', true),
        ];

        $this->db->insert('tb_barang', $data);
    }

    public function hapus_data_barang($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tb_barang');
    }

    public function get_data_barang($id)
    {
        return $this->db->get_where('tb_barang', ['id' => $id])->row_array();
    }

    public function ubah_data_barang()
    {

        $data = [
            "barcode"     => $this->input->post('barcode', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "stock_awal"       => $this->input->post('stock', true),
            "harga_beli"  => $this->input->post('harga_beli', true),
            "harga_jual"  => $this->input->post('harga_jual', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_barang', $data);
    }
}
