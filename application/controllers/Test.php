<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		 $data = array(
			'title'			=>'Test',
			'view'			=>'testimoni/prodi',
		);
		$this->load->view('layout/wrapper',$data);
	}
	public function testing(){
		$this->load->model('m_komentar');
		echo $this->m_komentar->getKomentaruniv('2');
	}
}
