<?php
class laporan_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function set_laporan(){
    $this->load->helper('url');

    $waktuMulai = $this->input->post('waktuMulai');
    $waktuAkhir = $this->input->post('waktuAkhir');
    $jenisLaporan = $this->input->post('jenisLaporan');

    if ($jenisLaporan=="Pengeluaran") {
      //
      // $condition = array(
      //   "tanggal_referensi" => "between '$waktuMulai' AND '$waktuAkhir'",
      //   "jenis" =>"penerimaan"
      // );
      //
      // $this->db->select('SUM(jumlah)');
      // $this->db->from('transaksi_kas');
      // $this->db->where($condition);
      // $bank = $this->db->get();
      // return $bank->result();

      $totalLaporan ="1";


    }elseif ($jenisLaporan=="Pemasukan") {
      $totalLaporan = "2";
    }elseif ($jenisLaporan=="Laba") {
      $totalLaporan = "3";
    }


    $data = array(
      'judul' => $this->input->post('judul'),
      'deskripsi' => $this->input->post('deskripsi'),
      'jenisLaporan' => $jenisLaporan,
      'waktuMulai' => $this->input->post('waktuMulai'),
      'waktuAkhir' => $this->input->post('waktuAkhir'),
      'kodePelacakan' => $this->input->post('kodePelacakan'),
      'metodeAkuntansi' => $this->input->post('metodeAkuntansi'),
      'catatanKaki' => $this->input->post('catatanKaki'),
      'totalLaporan' => $totalLaporan
    );
    return $this->db->insert('laporan',$data);
  }

  public function get_laporan(){
      $query = $this->db->get('laporan');
      return $query->result_array();
  }

  public function get_laporan_id($id){
    $query = $this->db->get_where('laporan',array('id' => $id));
    return $query->row_array();
  }

  function update_laporan($id){
    $this->load->helper('url');

    $data = array(
      'judul' => $this->input->post('judul'),
      'deskripsi' => $this->input->post('deskripsi'),
      'jenisLaporan' => $this->input->post('jenisLaporan'),
      'waktuMulai' => $this->input->post('waktuMulai'),
      'waktuAkhir' => $this->input->post('waktuAkhir'),
      'kodePelacakan' => $this->input->post('kodePelacakan'),
      'metodeAkuntansi' => $this->input->post('metodeAkuntansi'),
      'catatanKaki' => $this->input->post('catatanKaki')
      // 'totalLaporan' => $totalLaporan;
    );
    $this->db->where('id',$id);
    return $this->db->update('laporan',$data);
  }

  public function delete_laporan($id)
  {
    return $this->db->delete('laporan',array('id' => $id));
  }

}


 ?>
