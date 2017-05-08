<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_testimoni');
		$this->load->model('m_mahasiswa');
	}

	public function prodi(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
				'title'			=>'Testimoni '.$t->NAMA_PRODI,
				'view'			=>'testimoni/prodi',
				'nama'			=>$t->NAMA_MHS,
				'prodi'			=>$t->NAMA_PRODI,
				'univ'			=>$t->NAMA_UNIV,
				'user'			=>$t->USERNAME_MHS
		);
		$this->load->view('mahasiswa/layout/wrapper', $data);
	}
	public function prodiSubmit(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
			'IDPRODITESTI'		=> $t->PRODI,
			'USERNAME_MHS'		=> $t->USERNAME_MHS,
			'TESTIPRODI'		=> $this->input->post('testimoni'),
		);
		$this->m_testimoni->inTestiProdi($data);
		redirect('jenisprodi/infoprodi/'.$t->PRODI);
	}

	//////////////////////////////////////////////////////////////////////

	public function prodiuniv(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
				'title'			=>'Testimoni '.$t->NAMA_PRODI,
				'view'			=>'testimoni/prodiuniv',
				'nama'			=>$t->NAMA_MHS,
				'prodi'			=>$t->NAMA_PRODI,
				'univ'			=>$t->NAMA_UNIV,
				'user'			=>$t->USERNAME_MHS
		);
		$this->load->view('mahasiswa/layout/wrapper', $data);
	}
	public function prodiunivSubmit(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
			'IDPRODITESTI'			=> $t->PRODI,
			'IDUNIVTESTI'			=> $t->UNIV,
			'USERNAME_MHS'			=> $t->USERNAME_MHS,
			'TESTIPROUNIV'			=> $this->input->post('testimoni'),
		);
		$this->m_testimoni->inTestiProdiuniv($data);
		redirect('universitas/infoprodiuniv/'.$t->UNIV.'/'.$t->PRODI);
	}

	////////////////////////////////////////////////////////////////////////

	public function universitas(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
				'title'			=>'Testimoni '.$t->NAMA_UNIV,
				'view'			=>'testimoni/universitas',
				'nama'			=>$t->NAMA_MHS,
				'prodi'			=>$t->NAMA_PRODI,
				'univ'			=>$t->NAMA_UNIV,
				'user'			=>$t->USERNAME_MHS
		);
		$this->load->view('mahasiswa/layout/wrapper', $data);
	}
	public function universitasSubmit(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
		foreach ($d as $t){}
		$data = array(
			'IDUNIVTESTI'		=> $t->UNIV,
			'USERNAME_MHS'		=> $t->USERNAME_MHS,
			'TESTIUNIV'			=> $this->input->post('testimoni'),
		);
		$this->m_testimoni->inTestiUniversitas($data);
		redirect('universitas/infouniv/'.$t->UNIV);
	}

}
