<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produsen extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produsen_model');

		// Proteksi halaman
		$this->simple_login->cek_login();
	}

	// Load Produsen
	public function index()
	{
		$produsen = $this->produsen_model->listing();

		$data = array (	'title' 				=> 'Data Produsen',
						'produsen'				=> $produsen,
						'isi' 					=> 'admin/produsen/list');
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah Produsen 
	// dapat menggunakan script di bawah ini namun tidak menggunakan validation 
	public function tambah()
	{
		if (isset($_FILES['file']['name'])) {
			$config['upload_path'] 		= './upload/';
			$config['allowed_types']	= 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {
				echo $this->upload->display_errors();
			} else {

				$datas = $this->upload->data();

				$config['image_library'] = 'gd2';
				$config['source_image']	 = './upload/'.$datas['file_name'];
				$config['width']		 = "250";
				$config['create_thumb']  = TRUE;
				$config['maintain_ratio']= TRUE;
				$config['thumb_marker']		= '';
				$config['encrypt_name'] = TRUE;
				$config['new_image']	 = './upload/thumbs/'.$datas['file_name'];

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$data = array(	
								'gambar'			=> $datas['file_name'],
						);
				$this->produsen_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data telah ditambahkan');

				redirect (base_url('admin/produsen'), 'refresh');
			}
		}
	}
	
	// Tambah Produk
	public function tambahkan()
	{
		// Validasi input
		$valid  = $this->form_validation;

		$valid->set_rules('nama_produsen', 'Nama Produsen', 'required',
				array( 	'required' 			=> '%s harus diisi'));
		
		if ($valid->run()) {
			$config['upload_path'] 		= './upload/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400'; //dalam KB
			$config['max_width']  		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				
		// End Validasi
		
		$data = array ( 'title'		=> 'Tambah Produk',
						'error' 	=> $this->upload->display_errors(),
						'isi'		=> 'admin/produsen/tambah'
					  );
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database

		} else {
			$upload_gambar = array('upload_data' => $this->upload->data());
			// Create thumnbail
				$config['image_library'] 	= 'gd2';
				$config['source_image'] 	= './upload/'.$upload_gambar['upload_data']['file_name'];
				// LOkasi folder thumbnail
				$config['new_image']		= './upload/thumbs';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width']         	= 250; //pixel
				$config['height']       	= 550;
				$config['thumb_marker']		= '';

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
			// End create thumbnail
			$i = $this->input;

			$data = array(	'nama_produsen'		=> $i->post('nama_produsen'),
							'gambar'			=> $upload_gambar['upload_data']['file_name'],
							'alamat'			=> $i->post('alamat'),
							'produksi'			=> $i->post('produksi'),
							'tempat_produksi'	=> $i->post('tempat_produksi'),
							'latar_belakang'	=> $i->post('latar_belakang'),
							'whatsapp'			=> $i->post('whatsapp'),
							'instagram'			=> $i->post('instagram'),
							'facebook'			=> $i->post('facebook')
						);

			$this->produsen_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambahkan');

			redirect (base_url('admin/produsen'), 'refresh');
		}}
		// End masuk database
		$data = array ( 'title'		=> 'Tambah Produk',
						'isi'		=> 'admin/produsen/tambah'
					  );
		
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Proses hapus gambar dan data dari database
	public function delete($id_produsen)
	{
		$produsen = $this->produsen_model->detail($id_produsen);
		unlink('./upload/'.$produsen->gambar);
		unlink('./upload/thumbs/'.$produsen->gambar);
		// End proses hapus

		$data = array('id_produsen'  =>  $id_produsen);
		
		$this->produsen_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');

		redirect (base_url('admin/produsen'), 'refresh');
	}
}

/* End of file Produsen.php */
/* Location: ./application/controllers/admin/Produsen.php */