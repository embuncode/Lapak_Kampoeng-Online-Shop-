<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function index()
	{
		$data  = array  (	'title' 		=> 'About Lapak Kampoeng Store',	
							'isi'			=> 'v_about_us/list'
						);
		$this->load->view('v_layouts/wrapper', $data, FALSE);
	}

}

/* End of file About_us.php */
/* Location: ./application/controllers/About_us.php */