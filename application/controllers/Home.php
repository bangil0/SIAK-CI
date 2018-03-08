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
}
