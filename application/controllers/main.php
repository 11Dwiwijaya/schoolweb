<?php

class main extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/main-header');
		$this->load->view('templates/footer');
		$this->load->view('home');
	}
	public function ppdb()
	{
		$this->load->view('templates/main-header');
		$this->load->view('templates/footer');

		$this->load->view('main/ppdb');
	}
	public function data()
	{
		$this->load->view('templates/main-header');
		$this->load->view('templates/footer');
		$this->load->view('main/datapdb');
	}
	public function download()
	{
		$this->load->view('main/download-data');
	}
	public function pengumuman()
	{
		$this->load->view('templates/main-header');
		$this->load->view('templates/footer');
		$this->load->view('main/pengumuman');
	}

}
?>