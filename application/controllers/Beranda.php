<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'			=>'Welcome to KampusQ',
			'view'			=>'beranda'
		);
		$this->load->view('layout/wrapper', $data);
	}
}
