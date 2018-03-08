<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('index');
        $this->load->view('static/footer');
    }

    public function rekening_bank()
	{
        $this->load->view('rekening_bank');
        $this->load->view('static/footer');
    }

    public function rekening_bank_baru()
	{
        $this->load->view('rekening_bank_baru');
        $this->load->view('static/footer');
    }

    public function rekening_bank_ubah()
	{
        $this->load->view('rekening_bank_ubah');
        $this->load->view('static/footer');
    }

    public function akun_kas()
	{
        $this->load->view('akun_kas');
        $this->load->view('static/footer');
    }

    public function akun_kas_baru()
	{
        $this->load->view('akun_kas_baru');
        $this->load->view('static/footer');
    }

    public function akun_kas_edit()
	{
        $this->load->view('akun_kas_edit');
        $this->load->view('static/footer');
    }

     public function transaksi_bank()
	{
        $this->load->view('transaksi_bank');
        $this->load->view('static/footer');
    }

     public function transaksi_bank_ubah()
	{
        $this->load->view('transaksi_bank_ubah');
        $this->load->view('static/footer');
    }

    public function transaksi_bank_impor()
	{
        $this->load->view('transaksi_bank_impor');
        $this->load->view('static/footer');
    }

    public function transaksi_bank_penerimaan()
	{
        $this->load->view('transaksi_bank_penerimaan');
        $this->load->view('static/footer');
    }

    public function transaksi_bank_pengeluaran()
	{
        $this->load->view('transaksi_bank_pengeluaran');
        $this->load->view('static/footer');
    }

    public function transaksi_kas()
	{
        $this->load->view('transaksi_kas');
        $this->load->view('static/footer');
    }

    public function transaksi_kas_penerimaan()
	{
        $this->load->view('transaksi_kas_penerimaan');
        $this->load->view('static/footer');
    }

    public function transaksi_kas_pengeluaran()
	{
        $this->load->view('transaksi_kas_pengeluaran');
        $this->load->view('static/footer');
    }

    public function transaksi_kas_ubah()
	{
        $this->load->view('transaksi_kas_ubah');
        $this->load->view('static/footer');
    }

    public function inter_account_transfers()
	{
        $this->load->view('inter_account_transfers');
        $this->load->view('static/footer');
    }

    public function inter_account_transfers_baru()
	{
        $this->load->view('inter_account_transfers_baru');
        $this->load->view('static/footer');
    }

    public function inter_account_transfers_ubah()
	{
        $this->load->view('inter_account_transfers_ubah');
        $this->load->view('static/footer');
    }

    public function reimburse()
	{
        $this->load->view('reimburse');
        $this->load->view('static/footer');
    }

    public function reimburse_baru()
	{
        $this->load->view('reimburse_baru');
        $this->load->view('static/footer');
    }

    public function reimburse_lihat()
	{
        $this->load->view('reimburse_lihat');
        $this->load->view('static/footer');
    }

    public function reimburse_ubah()
	{
        $this->load->view('reimburse_ubah');
        $this->load->view('static/footer');
    }

	public function pelanggan()
	{
        $this->load->view('pelanggan');
        $this->load->view('static/footer');
    }

    public function pelanggan_baru()
	{
        $this->load->view('pelanggan_baru');
        $this->load->view('static/footer');
    }

    public function pelanggan_ubah()
	{
        $this->load->view('pelanggan_ubah');
        $this->load->view('static/footer');
    }

     public function penawaran_penjualan()
	{
        $this->load->view('penawaran_penjualan');
        $this->load->view('static/footer');
    }

     public function penawaran_penjualan_lihat()
	{
        $this->load->view('penawaran_penjualan_lihat');
        $this->load->view('static/footer');
    }

     public function penawaran_penjualan_ubah()
	{
        $this->load->view('penawaran_penjualan_ubah');
        $this->load->view('static/footer');
    }

     public function penawaran_penjualan_baru()
	{
        $this->load->view('penawaran_penjualan_baru');
        $this->load->view('static/footer');
    }

    public function pesanan_penjualan()
	{
        $this->load->view('pesanan_penjualan');
        $this->load->view('static/footer');
    }

    public function pesanan_penjualan_baru()
	{
        $this->load->view('pesanan_penjualan_baru');
        $this->load->view('static/footer');
    }

    public function pesanan_penjualan_lihat()
	{
        $this->load->view('pesanan_penjualan_lihat');
        $this->load->view('static/footer');
    }

    public function pesanan_penjualan_ubah()
	{
        $this->load->view('pesanan_penjualan_ubah');
        $this->load->view('static/footer');
    }
}
