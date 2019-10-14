<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
	}

	// Load data produk
	public function index()
	{
		$site 	= $this->konfigurasi_model->listing();
		$listing_kategori = $this->produk_model->listing_kategori();
		// ambil data total
		$total = $this->produk_model->total_produk();
		// Pagination start
		$this->load->library('pagination');
		
		$config['base_url'] 		= base_url().'produk/index/';
		$config['total_rows'] 		= $total->total;
		$config['use_page_number']	= TRUE;
		$config['per_page'] 		= 18;
		$config['uri_segment'] 		= 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config['num_links'] 		= floor($choice);

		// Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$config['first_url']		= base_url().'/produk/';
		
		$this->pagination->initialize($config);
		// Ambil data produk
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$produk = $this->produk_model->produk($config['per_page'], $page);
		// End pagination

		$data 	= array (	'title' 			=> 'Produk '.$site->namaweb,
		 					'site'				=> $site,
		 					'listing_kategori'	=> $listing_kategori,
		 					'produk'			=> $produk,
		 					'pagin'				=> $this->pagination->create_links(),
		 					'isi'				=> 'v_produk/list',
		 			  	);
		$this->load->view('v_layouts/wrapper', $data, FALSE);
	}

	// Listing data kategori Produk
	public function kategori($slug_kategori)
	{
		// Kategori Detail
		$kategori = $this->kategori_model->read($slug_kategori);
		$id_kategori = $kategori->id_kategori;

		$site 	= $this->konfigurasi_model->listing();
		$listing_kategori = $this->produk_model->listing_kategori();
		// ambil data total
		$total = $this->produk_model->total_kategori($id_kategori);
		// Pagination start
		$this->load->library('pagination');
		
		$config['base_url'] 		= base_url().'produk/kategori/'.$slug_kategori.'/index/';
		$config['total_rows'] 		= $total->total;
		$config['use_page_number']	= TRUE;
		$config['per_page'] 		= 6;
		$config['uri_segment'] 		= 5;
		$config['num_links'] 		= 5;
		$config['full_tag_open'] 	= '<ul class="pagination">';
		$config['full_tag_close'] 	= '</ul>';
		$config['first_link'] 		= 'First';
		$config['first_tag_open'] 	= '<li>';
		$config['first_tag_close'] 	= '</li>';
		$config['last_link'] 		= 'Last';
		$config['last_tag_open'] 	= '<li class="disabled"><li class="active"><a href="#"';
		$config['last_tag_close'] 	= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 		= '&gt;';
		$config['next_tag_open'] 	= '<div>';
		$config['next_tag_close'] 	= '</div>';
		$config['prev_link'] 		= '&lt;';
		$config['prev_tag_open'] 	= '<div>';
		$config['prev_tag_close'] 	= '</div>';
		$config['cur_tag_open'] 	= '<b>';
		$config['cur_tag_close'] 	= '</b>';
		$config['first_url']		= base_url().'/produk/kategori/'.$slug_kategori;
		
		$this->pagination->initialize($config);
		// Ambil data produk
		$page = ($this->uri->segment(5)) ? ($this->uri->segment(5)-1) * $config['per_page']:0;
		$produk = $this->produk_model->kategori($id_kategori, $config['per_page'], $page);
		// End pagination

		$data 	= array (	'title' 			=> $kategori->nama_kategori,
		 					'site'				=> $site,
		 					'listing_kategori'	=> $listing_kategori,
		 					'produk'			=> $produk,
		 					'pagin'				=> $this->pagination->create_links(),
		 					'isi'				=> 'produk/list',
		 			  	);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// Membuat detail produk
	public function detail($slug_produk)
	{
		$site 				= $this->konfigurasi_model->listing();
		$produk 			= $this->produk_model->read($slug_produk);
		$id_produk 			= $produk->id_produk;
		$gambar  			= $this->produk_model->gambar($id_produk);
		// Produk home
		$produk_related 	= $this->produk_model->home();

		$data 	= array (	'title' 			=> $produk->nama_produk,
		 					'site'				=> $site,
		 					'produk'			=> $produk,
		 					'produk_related'	=> $produk_related,
		 					'gambar'			=> $gambar,
		 					'isi'				=> 'v_produk/detail',
		 			  	);
		$this->load->view('v_layouts/wrapper', $data, FALSE);
	}

	// Membuat Search Autocomplete
	public function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->produk_model->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_produk;
                echo json_encode($arr_result);
            }
        }
    }

    public function search(){
    	
    	$site 	= $this->konfigurasi_model->listing();
		$listing_kategori = $this->produk_model->listing_kategori();
		// ambil data total
		$total = $this->produk_model->total_produk();
		// Pagination start
		$this->load->library('pagination');
		
		$config['base_url'] 		= base_url().'produk/index/';
		$config['total_rows'] 		= $total->total;
		$config['use_page_number']	= TRUE;
		$config['per_page'] 		= 18;
		$config['uri_segment'] 		= 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config['num_links'] 		= floor($choice);

		// Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$config['first_url']		= base_url().'/produk/';
		
		$this->pagination->initialize($config);
		// Ambil data produk
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$produk = $this->produk_model->produk($config['per_page'], $page);
		// End pagination

		$title=$this->input->get('title');

		$search = $this->produk_model->search_blog($title);

		$data 	= array (	'title' 			=> 'Produk '.$site->namaweb,
		 					'site'				=> $site,
		 					'listing_kategori'	=> $listing_kategori,
		 					'produk'			=> $produk,
		 					'pagin'				=> $this->pagination->create_links(),
		 					'isi'				=> 'v_produk/search',
							'data'				=> $search,
						);

		$this->load->view('v_layouts/wrapper',$data);
	}
}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */