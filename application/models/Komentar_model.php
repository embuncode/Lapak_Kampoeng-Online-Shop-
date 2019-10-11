<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('komentar');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		
		return $query->result();
	}

	// Tambah Komentar
	public function tambah($data)
	{
		$this->db->insert('komentar', $data);
	}

	// Delete Komentar
	public function delete($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('komentar', $data);
	}

}

/* End of file Komentar_model.php */
/* Location: ./application/models/Komentar_model.php */