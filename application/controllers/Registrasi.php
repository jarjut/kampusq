<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function mahasiswa()
	{
		$this->load->model('m_universitas');
		$this->load->model('m_jenisprodi');
		$univ = $this->m_universitas->getUniv();
		$prodi = $this->m_jenisprodi->getProdi();
        $data = array(
			'title'			=>'Registrasi Mahasiswa',
			'view'			=>'regis/regis-mahasiswa',
			'jenisprodi'	=>$prodi->result(),
			'universitas'	=>$univ->result(),
		);
		$this->load->view('layout/wrapper', $data);
	}
	public function siswa()
	{
		$data = array(
			'title'			=>'Registrasi Siswa',
			'view'			=>'regis/regis-siswa',
		);
		$this->load->view('layout/wrapper', $data);
	}
}
