<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title'			=>'Halaman Login',
			'view'			=>'login/login'
		);
		$this->load->view('layout/wrapper', $data);
	}
	public function mahasiswa()
	{
		$data = array(
			'title'			=>'Login Mahasiswa',
			'view'			=>'login/login-mahasiswa'
		);
		$this->load->view('layout/wrapper', $data);
	}
	public function siswa()
	{
		$data = array(
			'title'			=>'Login Siswa',
			'view'			=>'login/login-siswa'
		);
		$this->load->view('layout/wrapper', $data);
	}
}
