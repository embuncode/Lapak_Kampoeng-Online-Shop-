<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
	}

	// load listing
	public function index()
	{
		$data = array(		'title' 	=> 'Kontak Kami',
							'isi'		=> 'kontak/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */