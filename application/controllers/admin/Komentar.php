<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('komentar_model');

		// Proteksi halaman
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$komentar = $this->komentar_model->listing();

		$data = array ( 'title'		=> 'Komentar Pelanggan', 
						'komentar'		=> $komentar,
						'isi'		=> 'admin/komentar/list'
					  );

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete komentar
	public function delete($id)
	{
		$data = array('id'  =>  $id);
		
		$this->komentar_model->delete($data);
		$this->session->set_flashdata('sukses', 'Komentar telah dihapus');

		redirect (base_url('admin/komentar'), 'refresh');
	}

}

/* End of file Komentar.php */
/* Location: ./application/controllers/admin/Komentar.php */