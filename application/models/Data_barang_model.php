<?php

class Data_barang_model extends CI_Model
{
    public function getAlltb_barang()
    {
        // return $query = $this->db->get('tb_barang')->result_array();
        //return $query = $this->db->join('tb_barang', 'tb_barang.id_catagory = tb_catagory.id', 'left')->result_array();

        $this->db->select('tb_barang.*,tb_catagory.catagory');
        $this->db->from('tb_barang');
        $this->db->join('tb_catagory', 'tb_catagory.id = tb_barang.id_catagory', 'left');
        return $query = $this->db->get()->result_array();
    }
    // public function getAlltb_category()
    // {
    //     return $query = $this->db->get('tb_catagory')->result_array();
    // }

    public function tambah_data_barang()
    {

        $data = [
            "barcode"     => $this->input->post('barcode', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "stock_awal"       => $this->input->post('stock', true),
            "harga_beli"  => $this->input->post('harga_beli', true),
            "harga_jual"  => $this->input->post('harga_jual', true),
            "id_catagory"  => $this->input->post('catagory', true),
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

    public function get_data_category($id)
    {
        return $this->db->get_where('tb_catagory', ['id' => $id])->row_array();
    }


    public function ubah_data_barang()
    {

        $data = [
            "barcode"     => $this->input->post('barcode', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "stock_awal"  => $this->input->post('stock', true),
            "harga_beli"  => $this->input->post('harga_beli', true),
            "harga_jual"  => $this->input->post('harga_jual', true),
            "id_catagory"    => $this->input->post('catagory', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_barang', $data);
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
