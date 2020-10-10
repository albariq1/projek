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
        $this->db->where('status', 'keranjang');
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
            "status" => 'keranjang',
            "id_pegawai" => $this->session->userdata('id_pegawai')
        ];
        $this->db->insert('tb_penjualan_detail', $data);
    }
    public function checkout()
    {
        $random = random_string('alnum', 15);
        $data = [
            "id_penjualan" => $random,
            "id_pegawai" => $this->session->userdata('id_pegawai'),
            "total_belanja" => $this->input->post('total_harga', true),
            "total_bayar" => $this->input->post('total_bayar', true),
            "kembalian" => $this->input->post('kembalian', true),
            "tgl_penjualan" => date('Y-m-d'),
            "waktu" => date('H:i:s'),
        ];
        $this->db->insert('tb_penjualan', $data);

        $id_barang = $this->input->post('id_barang');
        foreach ($id_barang as $key => $value) {
            $checkout[] = array(
                "id_barang" => $id_barang[$key],
                "id_penjualan" => $random,
                "status" => 'checkout',

            );
            // $this->db->update('tb_penjualan_detail', $id_barang[$key], $checkout);
            // $this->db->where('id_barang', $id_barang[$key]);
            // $this->db->update('tb_penjualan_detail', $checkout);

        }
        $this->db->update_batch('tb_penjualan_detail', $checkout, 'id_barang');
    }
}
