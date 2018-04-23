<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
         if (!$this->User_model->is_LoggedIn()) {
            redirect('login');
        }
    }

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
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('index');
        $this->load->view('static/footer');
    }

    public function rekening_bank()
	{
        $this->load->model('Post_model');
        $user = $_SESSION['user_id'];
        $data = array(
				'record' => $this->Post_model->readBy('user', $user, 'rekening_bank', 'id', 'ASC', null, null)
			);
        $this->load->view('rekening_bank',$data);
        $this->load->view('static/footer');
    }

    public function rekening_bank_baru()
	{
        $this->load->view('rekening_bank_baru');
        $this->load->view('static/footer');
    }

    public function rekening_bank_ubah($id=0)
	{
        $this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Post_model');

		if($id != 0 && !empty($id)){
			$data = array(
					'record' => $this->Post_model->edit($id, 'rekening_bank')
				);

            $this->load->view('rekening_bank_ubah',$data);
            $this->load->view('static/footer');

		}
		else{
			redirect(base_url('rekening_bank'));
		}
    }


		public function akun_kas()
	{
        $this->load->model('Post_model');
        $user = $_SESSION['user_id'];
        $data = array(
				'record' => $this->Post_model->readBy('user', $user, 'akun_kas', 'id', 'ASC', null, null)
			);
				$this->load->view('akun_kas',$data);
        $this->load->view('static/footer');

    }

    public function akun_kas_baru()
	{
        $this->load->view('akun_kas_baru');
        $this->load->view('static/footer');
    }


		public function akun_kas_edit($id=0)
	{
				$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Post_model');

		if($id != 0 && !empty($id)){
			$data = array(
					'record' => $this->Post_model->edit($id, 'akun_kas')
				);

						$this->load->view('akun_kas_edit',$data);
						$this->load->view('static/footer');

		}
		else{
			redirect(base_url('akun_kas'));
		}
		}





		public function transaksi_bank()
	{
				$this->load->model('Post_model');

                $user = $_SESSION['user_id'];
				$data = array(
				'record' => $this->Post_model->readBy('user', $user, 'transaksi_bank', 'id', 'ASC', null, null)
			);
				$this->load->view('transaksi_bank',$data);
				$this->load->view('static/footer');
		}

		public function transaksi_bank_lihat($id)
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('transaksi_bank', 1, null),
				'rincian' =>  $this->Post_model->readBy('id_transaksi', $id, 'rincian_transaksi', 'id', 'desc', null, null)
			);
				$this->load->view('transaksi_bank_lihat',$data);
				$this->load->view('static/footer');
			}


     public function transaksi_bank_ubah($id)
	{
       $this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->edit($id,'transaksi_bank'),
				'rincian' =>  $this->Post_model->readBy('id_transaksi', $id, 'rincian_transaksi', 'id', 'asc', null, null),
                'rekening' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('transaksi_bank_ubah',$data);
        $this->load->view('static/footer');
    }

    public function transaksi_bank_impor()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);

        $this->load->view('transaksi_bank_impor',$data);
        $this->load->view('static/footer');
    }

    public function transaksi_bank_penerimaan()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);

        $this->load->view('transaksi_bank_penerimaan',$data);
        $this->load->view('static/footer');
    }

    public function transaksi_bank_pengeluaran()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('transaksi_bank_pengeluaran',$data);
        $this->load->view('static/footer');
    }


		public function transaksi_kas()
	{
				$this->load->model('Post_model');
				$user = $_SESSION['user_id'];
                    $data = array(
                            'record' => $this->Post_model->readBy('user', $user, 'transaksi_kas', 'id', 'ASC', null, null)
                        );
				$this->load->view('transaksi_kas',$data);
				$this->load->view('static/footer');
		}

    public function transaksi_kas_penerimaan()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('transaksi_kas_penerimaan',$data);
        $this->load->view('static/footer');
    }

    public function transaksi_kas_pengeluaran()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('transaksi_kas_pengeluaran',$data);
        $this->load->view('static/footer');
    }

    public function transaksi_kas_ubah($id)
	{
        $this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->edit($id,'transaksi_kas'),
				'rincian' =>  $this->Post_model->readBy('id_transaksi', $id, 'rincian_transaksi_kas', 'id', 'asc', null, null),
                'rekening' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('transaksi_kas_ubah',$data);
        $this->load->view('static/footer');
    }


		public function transaksi_kas_lihat()
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('transaksi_kas', 1, null)
				// 'rincian' =>  $this->Post_model->readBy('id_kas', $id, 'rincian_kas', 'id', 'desc', null, null)
			);
				$this->load->view('transaksi_kas_lihat',$data);
				$this->load->view('static/footer');
			}

			public function inter_account_transfers_lihat()
		{
					$this->load->model('Post_model');
					$data = array(
					'record' => $this->Post_model->read('inter_account_transfer', 1, null)
					// 'rincian' =>  $this->Post_model->readBy('id_kas', $id, 'rincian_kas', 'id', 'desc', null, null)
				);
					$this->load->view('inter_account_transfers_lihat',$data);
					$this->load->view('static/footer');
				}





		public function inter_account_transfers()
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('inter_account_transfer', null, null)
			);
				$this->load->view('inter_account_transfers',$data);
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
				$this->load->model('Post_model');
				$user = $_SESSION['user_id'];
                    $data = array(
                            'record' => $this->Post_model->readBy('user', $user, 'reimburse', 'id', 'ASC', null, null)
                        );
				$this->load->view('reimburse',$data);
				$this->load->view('static/footer');
		}

    public function reimburse_baru()
	{
        $this->load->model('Post_model');
        $data = array(
				'record' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('reimburse_baru',$data);
        $this->load->view('static/footer');
    }

    public function reimburse_lihat()
	{
        $this->load->view('reimburse_lihat');
        $this->load->view('static/footer');
    }

    public function reimburse_ubah($id)
	{
         $this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->edit($id,'reimburse'),
				'rincian' =>  $this->Post_model->readBy('id_transaksi', $id, 'rincian_transaksi_reimburse', 'id', 'asc', null, null),
                'rekening' => $this->Post_model->read('rekening_bank', null, null)
			);
        $this->load->view('reimburse_ubah',$data);
        $this->load->view('static/footer');
    }


		public function pelanggan()
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('pelanggan', null, null)
			);
				$this->load->view('pelanggan',$data);
				$this->load->view('static/footer');
			}


    public function pelanggan_baru()
	{
        $this->load->view('pelanggan_baru');
        $this->load->view('static/footer');
    }

    public function pelanggan_ubah($id=0)
	{
        	$this->load->model('Post_model');

		if($id != 0 && !empty($id)){
			$data = array(
					'record' => $this->Post_model->edit($id, 'pelanggan')
				);
        $this->load->view('pelanggan_ubah',$data);
        $this->load->view('static/footer');
    }
    }


		public function penawaran_penjualan()
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('penawaran_penjualan', null, null)
			);
				$this->load->view('penawaran_penjualan',$data);
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
         $this->load->model('Post_model');
				$data = array('pelanggan' => $this->Post_model->read('pelanggan', null, null)
			);
        $this->load->view('penawaran_penjualan_baru',$data);
        $this->load->view('static/footer');
    }


    public function pesanan_penjualan()
	{
				$this->load->model('Post_model');
				$data = array(
				'record' => $this->Post_model->read('pesanan_penjualan', null, null)
			);
				$this->load->view('pesanan_penjualan',$data);
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

		public function periode()
	{
				$this->load->view('periode');
				$this->load->view('static/footer');
		}

		public function laporan()
	{
			// 	$this->load->model('Post_model');
			// 	$data = array(
			// 	'record' => $this->Post_model->read('laporan', null, null)
			// );
				$this->load->view('laporan');
				$this->load->view('static/footer');
			}

			public function laporan_baru()
		{
				// 	$this->load->model('Post_model');
				// 	$data = array(
				// 	'record' => $this->Post_model->read('laporan', null, null)
				// );
					$this->load->view('laporan_baru');
					$this->load->view('static/footer');
				}
}
