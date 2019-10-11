<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		// Proteksi halaman
		$this->simple_login->cek_login();

		$this->load->model('transaksi_model');
		$this->load->model('pelanggan_model');
		$this->load->model('produk_model');
	}

	// Halaman utama dashboard
	public function index()
	{
		$transaksi['total_transaksi'] = $this->transaksi_model->listing();
		$pelanggan['total_pelanggan'] = $this->pelanggan_model->listing();
		$produk['total_produk'] = $this->produk_model->count_produk();

		$data = array (	'title' 		=> 'Dashboard',
						'transaksi'		=> $transaksi['total_transaksi'],
						'pelanggan'		=> $pelanggan['total_pelanggan'],
						'produk'		=> $produk['total_produk'],
						'isi' 			=> 'admin/dashboard/list');
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */