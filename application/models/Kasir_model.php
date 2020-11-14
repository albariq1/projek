<?php

class Kasir_model extends CI_Model
{
    public function getAlltb_barang()
    {
        return $query = $this->db->get('tb_barang')->result_array();
    }

    public function getAlltb_pegawai()
    {
        return $query = $this->db->get('tb_pegawai')->result_array();
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
        $harga_modal = $this->input->post('harga_beli', true);
        $tanggal_detail = date('Y-m-d');
        $data = [
            "id_barang" => $id_barang,
            "qty" => $this->input->post('qty', true),
            "total_harga" => $total_harga,
            "status" => 'keranjang',
            "id_pegawai" => $this->session->userdata('id_pegawai'),
            "harga_modal" => $harga_modal * $qty,
            "tanggal_detail" => $tanggal_detail
        ];
        $this->db->insert('tb_penjualan_detail', $data);
    }
    public function checkout()
    {
        $random = random_string('alnum', 15);
        $id_pegawai = $this->session->userdata('id');
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
        }
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->update_batch('tb_penjualan_detail', $checkout, 'id_barang');
    }
    public function struk($random)
    {
        // $this->db->select();
        // $this->db->from('tb_penjualan');
        // $this->db->join('tb_penjualan_detail', 'tb_penjualan_detail.id_penjualan = tb_penjualan.id_penjualan', 'left');
        // $this->db->join('tb_penjualan_detail', 'tb_penjualan_detail.id_barang = tb_barang.id', 'left');
        // return $query = $this->db->get()->result_array();

        return $this->db->query("SELECT * FROM `tb_penjualan_detail` INNER JOIN tb_penjualan on tb_penjualan_detail.id_penjualan = tb_penjualan.id_penjualan INNER JOIN tb_pegawai on tb_pegawai.id = tb_penjualan.id_pegawai INNER JOIN  tb_barang on tb_barang.id = tb_penjualan_detail.id_barang  WHERE tb_penjualan_detail.id_penjualan = '$random'")->result_array();
    }
}
