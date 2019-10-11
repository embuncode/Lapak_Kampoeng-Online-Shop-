<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		$this->load->model('komentar_model');
	}

	public function tambah()
	{
		$nama_pelanggan = $this->session->userdata('nama_pelanggan');

		$i = $this->input;

			$data = array(	'nama_pelanggan' 	=> $nama_pelanggan,
							'komentar'			=> $i->post('komentar'),
							'tanggal_komentar'	=> date('Y-m-d H:i:s')
						);

			$this->komentar_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Registrasi Berhasil!');

			redirect (base_url('dashboard'), 'refresh');
	}

}

/* End of file Komentar.php */
/* Location: ./application/controllers/Komentar.php */