<?php

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('login/login');
	}
	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('login/register');
	}
	public function admin()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('login/admin');
	}
	public function signout()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('home');
	}


}
?>