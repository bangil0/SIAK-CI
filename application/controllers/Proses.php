<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

    public function transaksi_kas_pengeluaran_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');
        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));
        $referensi  = $this->input->post('referensi');
        $akun_bank  = $this->input->post('akun_bank');
        $status     = $this->input->post('status');
        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));
        $diterima_dari = $this->input->post('diterima_dari');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $catatan       = $this->input->post('catatan');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');


        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan,
            'user'              => $_SESSION['user_id']
        );

        $this->Post_model->create('transaksi_kas',$data);
        $insert_id = $this->db->insert_id();


        $akun       = $this->input->post('akun');
        $pelanggan  = $this->input->post('pelanggan');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'id_transaksi' => $insert_id,
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );
        }

        $this->Post_model->create_batch('rincian_transaksi_kas',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function transaksi_kas_penerimaan_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');
        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));
        $referensi  = $this->input->post('referensi');
        $akun_bank  = $this->input->post('akun_bank');
        $status     = $this->input->post('status');
        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));
        $diterima_dari = $this->input->post('diterima_dari');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $catatan       = $this->input->post('catatan');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');


        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan,
            'user'              => $_SESSION['user_id']
        );

        $this->Post_model->create('transaksi_kas',$data);
        $insert_id = $this->db->insert_id();


        $akun       = $this->input->post('akun');
        $pelanggan  = $this->input->post('pelanggan');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'id_transaksi' => $insert_id,
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );
        }

        $this->Post_model->create_batch('rincian_transaksi_kas',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function reimburse_baru_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');
        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));
        $referensi  = $this->input->post('referensi');
        $akun_bank  = $this->input->post('akun_bank');
        $status     = $this->input->post('status');
        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));
        $diterima_dari = $this->input->post('diterima_dari');
        $diterima_oleh = $this->input->post('diterima_oleh');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $catatan       = $this->input->post('catatan');
        $grandtotal = $this->input->post('grandtotal');


        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'diterima_oleh'     => $diterima_oleh,
            'deskripsi'         => $deskripsi_transaksi,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan,
            'user'              => $_SESSION['user_id']
        );

        $this->Post_model->create('reimburse',$data);
        $insert_id = $this->db->insert_id();


        $akun       = $this->input->post('akun');
        $pelanggan  = $this->input->post('pelanggan');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'id_transaksi' => $insert_id,
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );
        }

        $this->Post_model->create_batch('rincian_transaksi_reimburse',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function transaksi_bank_penerimaan_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');
        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));
        $referensi  = $this->input->post('referensi');
        $akun_bank  = $this->input->post('akun_bank');
        $status     = $this->input->post('status');
        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));
        $diterima_dari = $this->input->post('diterima_dari');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $catatan       = $this->input->post('catatan');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');


        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan,
            'user'              => $_SESSION['user_id']
        );

        $this->Post_model->create('transaksi_bank',$data);
        $insert_id = $this->db->insert_id();


        $akun       = $this->input->post('akun');
        $pelanggan  = $this->input->post('pelanggan');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'id_transaksi' => $insert_id,
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );
        }

        $this->Post_model->create_batch('rincian_transaksi',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function transaksi_bank_ubah_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');

        $superid  = $this->input->post('superid');
        $add_akun = $this->input->post('add_akun');
        $add_deskripsi = $this->input->post('add_deskripsi');
        $add_linetotal = $this->input->post('add_linetotal');
        $add_pelanggan = $this->input->post('add_pelanggan');
        $add_price = $this->input->post('add_price');
        $add_qty = $this->input->post('add_qty');

        $insert_id = $this->db->insert_id();

        if($add_akun) {
            $data = array();
            for ($i = 0; $i < count($this->input->post('add_akun')); $i++)
            {
                $data[$i] = array(
                    'id_transaksi' => $superid,
                    'akun' => $add_akun[$i],
                    'pelanggan' => $add_pelanggan[$i],
                    'deskripsi' => $add_deskripsi[$i],
                    'kuantitas' => $add_qty[$i],
                    'harga'     => $add_price[$i],
                    'jumlah'    => $add_linetotal[$i]
                );
        }

        $this->Post_model->create_batch('rincian_transaksi',$data);
        }

        $akun_bank  = $this->input->post('akun_bank');
        $catatan       = $this->input->post('catatan');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $diterima_dari = $this->input->post('diterima_dari');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');

        $referensi  = $this->input->post('referensi');
        $status     = $this->input->post('status');

        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));

        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));

        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan
        );

        $this->Post_model->update($superid,$data,'transaksi_bank');




        $akun       = $this->input->post('akun');
        $rincian_id = $this->input->post('rincian_id');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');
        $pelanggan  = $this->input->post('pelanggan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );

        $this->Post_model->update($rincian_id[$i],$data[$i],'rincian_transaksi');
        }
        $hapus = $this->input->post('hapus');
        $hapus = explode(",",$hapus);
        if($hapus != NULL) {
          foreach($hapus as $hap) {
            $this->Post_model->delete($hap,'rincian_transaksi');
          }
        }
        echo "Data Inserted";

	}
    }


    public function transaksi_kas_ubah_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');

        $superid  = $this->input->post('superid');
        $add_akun = $this->input->post('add_akun');
        $add_deskripsi = $this->input->post('add_deskripsi');
        $add_linetotal = $this->input->post('add_linetotal');
        $add_pelanggan = $this->input->post('add_pelanggan');
        $add_price = $this->input->post('add_price');
        $add_qty = $this->input->post('add_qty');

        $insert_id = $this->db->insert_id();

        if($add_akun) {
            $data = array();
            for ($i = 0; $i < count($this->input->post('add_akun')); $i++)
            {
                $data[$i] = array(
                    'id_transaksi' => $superid,
                    'akun' => $add_akun[$i],
                    'pelanggan' => $add_pelanggan[$i],
                    'deskripsi' => $add_deskripsi[$i],
                    'kuantitas' => $add_qty[$i],
                    'harga'     => $add_price[$i],
                    'jumlah'    => $add_linetotal[$i]
                );
        }

        $this->Post_model->create_batch('rincian_transaksi_kas',$data);
        }

        $akun_bank  = $this->input->post('akun_bank');
        $catatan       = $this->input->post('catatan');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $diterima_dari = $this->input->post('diterima_dari');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');

        $referensi  = $this->input->post('referensi');
        $status     = $this->input->post('status');

        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));

        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));

        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan
        );

        $this->Post_model->update($superid,$data,'transaksi_kas');


        $akun       = $this->input->post('akun');
        $rincian_id = $this->input->post('rincian_id');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');
        $pelanggan  = $this->input->post('pelanggan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );

        $this->Post_model->update($rincian_id[$i],$data[$i],'rincian_transaksi_kas');
        }
        $hapus = $this->input->post('hapus');
        $hapus = explode(",",$hapus);
        if($hapus != NULL) {
          foreach($hapus as $hap) {
            $this->Post_model->delete($hap,'rincian_transaksi_kas');
          }
        }
        echo "Data Inserted";

	}
    }

     public function reimburse_ubah_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');

        $superid  = $this->input->post('superid');
        $add_akun = $this->input->post('add_akun');
        $add_deskripsi = $this->input->post('add_deskripsi');
        $add_linetotal = $this->input->post('add_linetotal');
        $add_pelanggan = $this->input->post('add_pelanggan');
        $add_price = $this->input->post('add_price');
        $add_qty = $this->input->post('add_qty');

        $insert_id = $this->db->insert_id();

        if($add_akun) {
            $data = array();
            for ($i = 0; $i < count($this->input->post('add_akun')); $i++)
            {
                $data[$i] = array(
                    'id_transaksi' => $superid,
                    'akun' => $add_akun[$i],
                    'pelanggan' => $add_pelanggan[$i],
                    'deskripsi' => $add_deskripsi[$i],
                    'kuantitas' => $add_qty[$i],
                    'harga'     => $add_price[$i],
                    'jumlah'    => $add_linetotal[$i]
                );
        }

        $this->Post_model->create_batch('rincian_transaksi_reimburse',$data);
        }

        $akun_bank  = $this->input->post('akun_bank');
        $catatan       = $this->input->post('catatan');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $diterima_dari = $this->input->post('diterima_dari');
        $diterima_oleh = $this->input->post('diterima_oleh');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');

        $referensi  = $this->input->post('referensi');
        $status     = $this->input->post('status');

        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));

        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));

        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'diterima_oleh'     => $diterima_oleh,
            'deskripsi'         => $deskripsi_transaksi,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan
        );

        $this->Post_model->update($superid,$data,'reimburse');


        $akun       = $this->input->post('akun');
        $rincian_id = $this->input->post('rincian_id');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');
        $pelanggan  = $this->input->post('pelanggan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );

        $this->Post_model->update($rincian_id[$i],$data[$i],'rincian_transaksi_reimburse');
        }
        $hapus = $this->input->post('hapus');
        $hapus = explode(",",$hapus);
        if($hapus != NULL) {
          foreach($hapus as $hap) {
            $this->Post_model->delete($hap,'rincian_transaksi_reimburse');
          }
        }
        echo "Data Inserted";

	}
    }

    public function transaksi_bank_pengeluaran_save($param=NULL){
		if($param=='insert'){
        $this->load->model('Post_model');
        $tanggal    = $this->input->post('tanggal');
        $tanggal    = date("Y-m-d", strtotime($tanggal));
        $referensi  = $this->input->post('referensi');
        $akun_bank  = $this->input->post('akun_bank');
        $status     = $this->input->post('status');
        $tanggal_buat  = $this->input->post('tanggal_buat');
        $tanggal_buat  = date("Y-m-d", strtotime($tanggal_buat));
        $diterima_dari = $this->input->post('diterima_dari');
        $deskripsi_transaksi = $this->input->post('deskripsi_transaksi');
        $catatan       = $this->input->post('catatan');
        $jenis = $this->input->post('jenis');
        $grandtotal = $this->input->post('grandtotal');


        $data = array(
            'tanggal_referensi' => $tanggal,
            'referensi'         => $referensi,
            'akun_bank'         => $akun_bank,
            'status'            => $status,
            'tanggal'           => $tanggal_buat,
            'diterima'          => $diterima_dari,
            'deskripsi'         => $deskripsi_transaksi,
            'jenis'             => $jenis,
            'jumlah'            => $grandtotal,
            'catatan'           => $catatan,
            'user'              => $_SESSION['user_id']
        );

        $this->Post_model->create('transaksi_bank',$data);
        $insert_id = $this->db->insert_id();


        $akun       = $this->input->post('akun');
        $pelanggan  = $this->input->post('pelanggan');
        $deskripsi  = $this->input->post('deskripsi');
        $qty        = $this->input->post('qty');
        $price      = $this->input->post('price');
        $linetotal  = $this->input->post('linetotal');
        $catatan    = $this->input->post('catatan');

        $data = array();
        for ($i = 0; $i < count($this->input->post('price')); $i++)
        {
            $data[$i] = array(
                'id_transaksi' => $insert_id,
                'akun' => $akun[$i],
                'pelanggan' => $pelanggan[$i],
                'deskripsi' => $deskripsi[$i],
                'kuantitas' => $qty[$i],
                'harga'     => $price[$i],
                'jumlah'    => $linetotal[$i]
            );
        }

        $this->Post_model->create_batch('rincian_transaksi',$data);
        echo "Data Inserted";
		} else{
			echo 'Error';
		}
	}

    public function insert_rekening_bank($param=NULL){
		if($param=='insert'){
			$post = $this->input->post();
            $nama = $post['nama'];
            $kode = $post['kode'];
            $pagu = $post['pagu'];
            $user = $_SESSION['user_id'];

			if(!empty($post['nama'])){
				$this->load->model('Post_model');

				$data = array(
						'nama' => $nama,
						'kode' => $kode,
						'kredit' => $pagu,
                        'user' => $user
					);

				$this->Post_model->create('rekening_bank',$data);
				echo 'success';
			} else {
				echo 'Nama wajib diisi';
			}

		} else{
			echo 'Error';
		}
	}

    public function tambah_pelanggan($param=NULL){
		if($param=='insert'){
			$post = $this->input->post();
            $a = $post['nama'];
            $b = $post['kode'];
            $c = $post['tanda_pengenal'];
            $d = $post['alamat'];
            $e = $post['email'];
            $f = $post['telepon'];
            $g = $post['fax'];
            $h = $post['hp'];
            $i = $post['info'];
            $j = $post['pagu'];

			if(!empty($post['nama'])){
				$this->load->model('Post_model');

				$data = array(
						'nama' => $a,
						'kode' => $b,
						'tanda_pengenal_bisnis' => $c,
                        'alamat_penagihan' => $d,
                        'alamat_surel' => $e,
                        'telepon' => $f,
                        'faksimili' => $g,
                        'ponsel' => $h,
                        'informasi_tambahan' => $i,
                        'pagu_kredit' => $j,
					);

				$this->Post_model->create('pelanggan',$data);
				echo 'success';
			} else {
				echo 'Data Tidak Boleh Kosong';
			}

		} else{
			echo 'Error';
		}
	}

     public function update_rekening_bank($param=NULL){
		if($param=='update'){
			$post = $this->input->post();
            $nama = $post['nama'];
            $kode = $post['kode'];
            $pagu = $post['pagu'];

			if(!empty($post['nama'])){
				$this->load->model('Post_model');

				$data = array(
						'nama' => $nama,
						'kode' => $kode,
						'kredit' => $pagu
					);

				$this->Post_model->update($post['id'],$data,'rekening_bank');
				echo 'success';
			} else {
				echo 'Nama wajib diisi';
			}

		} else{
			echo 'Error';
		}
	}

    public function delete_rekening($id=0){
		$this->load->model('Post_model');
		$this->Post_model->delete($id,'rekening_bank');
		redirect(base_url('rekening_bank'));
	}

  public function delete_transaksi_bank($id=0){
  $this->load->model('Post_model');
  $this->Post_model->delete($id,'transaksi_bank');
  redirect(base_url('transaksi_bank'));
}

public function delete_transaksi_kas($id=0){
$this->load->model('Post_model');
$this->Post_model->delete($id,'transaksi_kas');
redirect(base_url('transaksi_kas'));
}

public function delete_inter_account_transfers($id=0){
$this->load->model('Post_model');
$this->Post_model->delete($id,'inter_account_transfer');
redirect(base_url('inter_account_transfers'));
}



 public function insert_akun_kas($param=NULL){
 if($param=='insert'){
   $post = $this->input->post();
         $nama = $post['nama'];
         $kode = $post['kode'];


   if(!empty($post['nama'])){
     $this->load->model('Post_model');

     $data = array(
         'nama' => $nama,
         'kode' => $kode,
         'user' => $_SESSION['user_id']
     );

     $this->Post_model->create('akun_kas',$data);
     echo 'success';
   } else {
     echo 'Nama wajib diisi';
   }

 } else{
   echo 'Error';

   }
 }

 public function delete_akun_kas($id=0){
 $this->load->model('Post_model');
 $this->Post_model->delete($id,'akun_kas');
 redirect(base_url('akun_kas'));
 }

 public function update_akun_kas($param=NULL){
 if($param=='update'){
  $post = $this->input->post();
        $nama = $post['nama'];
        $kode = $post['kode'];

  if(!empty($post['nama'])){
    $this->load->model('Post_model');

    $data = array(
        'nama' => $nama,
        'kode' => $kode

      );

    echo 'success';
    $this->Post_model->update($post['id'],$data,'akun_kas');
  } else {
    echo 'Nama wajib diisi';
  }

 } else{
  echo 'Error';
 }
 }
}
