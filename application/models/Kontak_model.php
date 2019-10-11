<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all pelanggan
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('produsen');
		$this->db->order_by('id_produsen', 'desc');
		$query = $this->db->get();
		
		return $query->result();
	}

}

/* End of file Kontak_model.php */
/* Location: ./application/models/Kontak_model.php */