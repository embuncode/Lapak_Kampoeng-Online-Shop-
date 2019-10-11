<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produsen_model extends CI_Model {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all produsen
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('produsen');
		$this->db->order_by('id_produsen', 'desc');
		$query = $this->db->get();
		
		return $query->result();
	}

	// Detail produsen
	public function detail($id_produsen)
	{
		$this->db->select('*');
		$this->db->from('produsen');
		$this->db->where('id_produsen', $id_produsen);
		$this->db->order_by('id_produsen', 'desc');
		$query = $this->db->get();
		
		return $query->row();
	}

	// Add Produsen to database
	public function tambah($data)
	{
		$this->db->insert('produsen', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_produsen', $data['id_produsen']);
		$this->db->delete('produsen', $data);
	}
}

/* End of file Produsen_model.php */
/* Location: ./application/models/Produsen_model.php */