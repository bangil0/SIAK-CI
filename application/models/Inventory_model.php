<?php

class Inventory_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function set_inventory(){
    $this->load->helper('url');
    $data = array(
      'kode_barang' => $this->input->post('kode_barang'),
      'jenis_barang' => $this->input->post('jenis_barang'),
      'nama_satuan' => $this->input->post('nama_satuan'),
      'harga_beli' => $this->input->post('harga_beli'),
      'harga_jual' => $this->input->post('harga_jual'),
      'deskripsi' => $this->input->post('deskripsi'),
      'kode_pajak' => $this->input->post('kode_pajak'),
      'kode_pelacakan' => $this->input->post('kode_pelacakan'),
      'warna' => $this->input->post('warna'),
      'kategori' => $this->input->post('kategori'));
      return $this->db->insert('inventory',$data);
  }

public function get_inventory(){
    $query = $this->db->get('inventory');
    return $query->result_array();
}

public function get_inventory_id($kode_barang){
  $query = $this->db->get_where('inventory',array('kode_barang' => $kode_barang));
  return $query->row_array();
}

public function update_inventory($kode_barang)
{
  $this->load->helper('url');
  $data = array(
    'jenis_barang' => $this->input->post('jenis_barang'),
    'nama_satuan' => $this->input->post('nama_satuan'),
    'harga_beli' => $this->input->post('harga_beli'),
    'harga_jual' => $this->input->post('harga_jual'),
    'deskripsi' => $this->input->post('deskripsi'),
    'kode_pajak' => $this->input->post('kode_pajak'),
    'kode_pelacakan' => $this->input->post('kode_pelacakan'),
    'warna' => $this->input->post('warna'),
    'kategori' => $this->input->post('kategori'));

    $this->db->where('kode_barang',$kode_barang);
    return $this->db->update('inventory',$data);
}

public function delete_inventory($kode_barang)
{
  return $this->db->delete('inventory',array('kode_barang' => $kode_barang));
}

}


 ?>
