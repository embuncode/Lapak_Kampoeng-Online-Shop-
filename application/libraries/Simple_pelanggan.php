<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_pelanggan
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
		
		// load data model user
		$this->CI->load->model('pelanggan_model');
	}

	// Fungsi login
	public function login($email, $password)
	{
		$check = $this->CI->pelanggan_model->login($email, $password);

		// JIka ada data usernya maka create session login
		if ($check) {
			$id_pelanggan  	= $check->id_pelanggan;
			$nama_pelanggan	= $check->nama_pelanggan;

			// Create session
			$this->CI->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->CI->session->set_userdata('nama_pelanggan', $nama_pelanggan);
			$this->CI->session->set_userdata('email', $email);

			// Redirect ke halaman admin yang di proteksi
			redirect(base_url('dashboard'), 'refresh');

		} else {

			// Kalau tidak ada suruh masuk ke login lagi (email password salah)
			$this->CI->session->set_flashdata('warning', 'Email atau password salah');

			redirect (base_url('masuk'), 'refresh');
		}
	}

	// Fungsi Cek login
	public function cek_login()
	{
		// Memeriksa apakah session sudah ada atau belum jika belum di alihkan ke login
		if ($this->CI->session->userdata('email')  == "") {
			$this->CI->session->set_flashdata('warning', 'Anda belum login');

			redirect (base_url('masuk'), 'refresh');
		}
	}

	// Fungsi Logout
	public function logout()
	{
		// Membuang semua session yang telah diset pada saat login
		
		$this->CI->session->unset_userdata('id_pelanggan');
		$this->CI->session->unset_userdata('nama_pelanggan');
		$this->CI->session->unset_userdata('email');

		// setelah sesion dibuang maka redirect ke login
		$this->CI->session->set_flashdata('success', 'Anda berhasil logout');

		redirect (base_url('masuk'), 'refresh');
	}

}

/* End of file Simple_pelanggan.php */
/* Location: ./application/libraries/Simple_pelanggan.php */