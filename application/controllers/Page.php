<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index()
	{
		$data['judul']="Halaman Utama";
		$this->load->view('template_page/header', $data);
		$this->load->view('landing_page');
		$this->load->view('template_page/footer');
	}
}
