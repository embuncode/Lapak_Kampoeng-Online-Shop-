<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produsen extends CI_Controller {

	// Load Model 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produsen_model');
	}

	public function index()
	{
		$produsen = $this->produsen_model->listing();

		$data  = array  (	'title' 		=> 'Profil Produsen',	
							'produsen'		=> $produsen,
							'isi'			=> 'produsen/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail($id_produsen)
	{
		$produsen = $this->produsen_model->detail($id_produsen);

		$data  = array  (	'title' 		=> 'Detail Produsen',	
							'produsen'		=> $produsen,
							'isi'			=> 'produsen/detail'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Produsen.php */
/* Location: ./application/controllers/Produsen.php */