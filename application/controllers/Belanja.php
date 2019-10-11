<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		// Load helper random string
		$this->load->helper('string');
	}

	// Halaman belanja
	public function index()
	{
		$keranjang = $this->cart->contents();

		$data  = array  (	'title' 		=> 'Keranjang Belanja',	
							'keranjang'		=> $keranjang,
							'isi'			=> 'belanja/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Halaman sukses
	public function sukses()
	{
		$data  = array  (	'title' 		=> 'Belanja Berhasil!',	
							'isi'			=> 'belanja/sukses'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Tambahkan ke keranjang belanja
	public function add() 
	{
		// Ambil data dari form
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		$redirect_page 	= $this->input->post('redirect_page');
			
		// Proses memasukkan ke keranjang belanja
		$data  = array 	(	'id' 		=> $id,
							'qty'		=> $qty,
							'price'		=> $price,
							'name'		=> $name,
						);
		$this->cart->insert($data);
		// Redirect page
		redirect($redirect_page,'refresh');
	}

	// Hapus semua isi keranjang Belanja
	public function hapus($rowid='')
	{
		if ($rowid) {
			// Menghapus sesuai peritem di shooping cartnya
			$this->cart->remove($rowid);
			$this->session->set_flashdata('sukses' ,'Data Belanja Telah Di Hapus!');
			redirect(base_url('belanja'), 'refresh');			
		} else {
			// Menghapus semua data di shooping cart
			$this->cart->destroy();
			$this->session->set_flashdata('sukses' ,'Data Keranjang Belanja Telah Di Hapus!');
			redirect(base_url('belanja'), 'refresh');			
		}
	}

	// Update cart
	public function update_cart($rowid)
	{
		// Jika ada row id 
		if ($rowid) {
			$data = array 	(	'rowid'		=> $rowid,
								'qty'		=> $this->input->post('qty')
							);
			$this->cart->update($data);
			$this->session->set_flashdata('sukses', 'Data Keranjang Berhasil Di Update');
			redirect(base_url('belanja'),'refresh');

		} else {
			// Jika tidak ada rowid
			redirect(base_url('belanja'),'refresh');
		}
	}

	// Function Checkout
	public function checkout()
	{
		// Check pelanggan sudah login atau belum 
		// Jika belum maka harus registrasi dan login 
		// untuk pengecekan maka dengan session email

		// Kondisi pelanggan sudah login 
		if ($this->session->userdata('email')) {
			$email 			= $this->session->userdata('email');
			$nama_pelanggan	= $this->session->userdata('nama_pelanggan');
			$pelanggan 		= $this->pelanggan_model->sudah_login($email, $nama_pelanggan);

			$keranjang = $this->cart->contents();

			// Validasi input
			$valid  = $this->form_validation;

			$valid->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required',
					array( 	'required' 			=> '%s harus diisi'));

			$valid->set_rules('telepon', 'Nomor Telepon', 'required',
					array( 	'required' 			=> '%s harus diisi'));

			$valid->set_rules('alamat', 'Alamat', 'required',
					array( 	'required' 			=> '%s harus diisi'));

			$valid->set_rules('email', 'Email', 'required|valid_email',
					array(  'required' 			=> '%s Harus diisi',
							'valid_email'		=> '%s Tidak valid'
							));

			if ($valid->run() === false) {
			// End Validasi

			$data  = array  (	'title' 		=> 'Checkout',	
								'keranjang'		=> $keranjang,
								'pelanggan'		=> $pelanggan,
								'isi'			=> 'belanja/checkout'
							);
			$this->load->view('layout/wrapper', $data, FALSE);

			// Masuk database
			} else {
				$i = $this->input;

				$data = array(	'id_pelanggan'		=> $pelanggan->id_pelanggan,
								'nama_pelanggan' 	=> $i->post('nama_pelanggan'),
								'email'				=> $i->post('email'),
								'telepon'			=> $i->post('telepon'),
								'alamat'			=> $i->post('alamat'),
								'kode_transaksi'	=> $i->post('kode_transaksi'),
								'jumlah_transaksi'	=> $i->post('jumlah_transaksi'),
								'tanggal_transaksi'	=> $i->post('tanggal_transaksi'),
								'status_bayar'		=> 'Belum',
								'tanggal_post'		=> date('Y-m-d H:i:s')
							);
				// Proses Masuk ke table header_transaksi
				$this->header_transaksi_model->tambah($data);
				// Proses Masuk ke table Transaksi
				foreach ($keranjang as $keranjang) {
					$sub_total = $keranjang['price'] * $keranjang['qty'];

					$data = array(	'id_pelanggan'		=> $pelanggan->id_pelanggan,
									'kode_transaksi'	=> $i->post('kode_transaksi'),
									'id_produk'			=> $keranjang['id'],
									'harga'				=> $keranjang['price'],
									'jumlah'			=> $keranjang['qty'],
									'total_harga'		=> $sub_total,
									'tanggal_transaksi'	=> $i->post('tanggal_transaksi')
								);
					// Proses Masuk ke table transaksi
					$this->transaksi_model->tambah($data);
				}
				// End transaksi
				// Setelah masuk table transaksi maka keranjang di kosongkan
				$this->cart->destroy();
				// End masuk table transaksi
				$this->session->set_flashdata('sukses', 'Check Out Berhasil!');

				redirect (base_url('belanja/sukses'), 'refresh');
			}
			// End masuk database

		} else {
			// Jika belum login maka registrasi dahulu
			$this->session->set_flashdata('sukses', 'Silahkan Login atau Registrasi Dahulu!');
			redirect(base_url('registrasi'), 'refresh');
		}
	}
}

/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */