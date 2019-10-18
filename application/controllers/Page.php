<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function about()
	{
		$this->load->view('template/head');
		$this->load->view('page/about');
		$this->load->view('template/foot');
	}

	public function join()
	{
		$this->load->view('template/head');
		$this->load->view('page/join');
		$this->load->view('tempate/foot');
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */