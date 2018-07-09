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

    if ($jenisLaporan=="Pemasukan") {

      $condition = array(
        "tanggal_referensi >= " => $waktuMulai,
        "tanggal_referensi <= " => $waktuAkhir,
        "jenis" =>"penerimaan"

      );
      $this->db->select('SUM(jumlah) as jumlah');
      $this->db->from('transaksi_bank');
      $this->db->where($condition);
      $bank = $this->db->get()->row();
      // return $bank->result();
      $bank = $bank->jumlah;

      $this->db->select('SUM(jumlah) as jumlah');
      $this->db->from('transaksi_kas');
      $this->db->where($condition);
      $kas = $this->db->get()->row();
      // return $bank->result();
      $kas = $kas->jumlah;

      $totalLaporan = $kas + $bank;

    }elseif ($jenisLaporan=="Pengeluaran") {

            $condition = array(
              "tanggal_referensi >= " => $waktuMulai,
              "tanggal_referensi <= " => $waktuAkhir,
              "jenis" =>"pengeluaran"

            );
            $this->db->select('SUM(jumlah) as jumlah');
            $this->db->from('transaksi_bank');
            $this->db->where($condition);
            $bank = $this->db->get()->row();
            // return $bank->result();
            $bank = $bank->jumlah;

            $this->db->select('SUM(jumlah) as jumlah');
            $this->db->from('transaksi_kas');
            $this->db->where($condition);
            $kas = $this->db->get()->row();
            // return $bank->result();
            $kas = $kas->jumlah;

            $totalLaporan = $kas + $bank;

    }elseif ($jenisLaporan=="Laba") {

      $pengeluaranCon = array(
        "waktuMulai >= " => $waktuMulai,
        "waktuAkhir <= " => $waktuAkhir,
        "jenisLaporan" =>"Pengeluaran"

      );


      $pemasukanCon = array(
        "waktuMulai >= " => $waktuMulai,
        "waktuAkhir <= " => $waktuAkhir,
        "jenisLaporan" =>"Pemasukan"
      );

      $this->db->select('SUM(totalLaporan) as jumlah');
      $this->db->from('laporan');
      $this->db->where($pengeluaranCon);
      $pengeluaran = $this->db->get()->row();
      // return $bank->result();
      $pengeluaran = $pengeluaran->jumlah;
      //
      $this->db->select('SUM(totalLaporan) as jumlah');
      $this->db->from('laporan');
      $this->db->where($pemasukanCon);
      $pemasukan = $this->db->get()->row();
      // return $bank->result();
      $pemasukan = $pemasukan->jumlah;

      $totalLaporan = $pemasukan - $pengeluaran;
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

    $this->db->select('waktuMulai,waktuAkhir,jenisLaporan');
    $this->db->from('laporan');
    $this->db->where(
      'id' , $id );
    $data = $this->db->get()->row();
    $jenis = $data->jenisLaporan=="Penerimaan"?"Pemasukan":"Pengeluaran";

    $con = array(
      "tanggal_referensi >= " =>  $data->waktuMulai,
      "tanggal_referensi <= " => $data->waktuAkhir,
      "jenis" => $jenis
    );

    $this->db->select('*');
    $this->db->from('transaksi_bank');
    $this->db->where($con);
    // $this->db->get();
    $bank = $this->db->get()->result_array();

    $this->db->select('*');
    $this->db->from('transaksi_kas');
    $this->db->where($con);
    $kas = $this->db->get()->result_array();

    return array("bank"=>$bank,"kas"=>$kas);

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
