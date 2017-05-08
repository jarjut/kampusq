<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_testimoni');
		$this->load->model('m_komentar');
	}
	public function prodi($idpost){
		$testi = $this->m_testimoni->get1TestiProdi($idpost)->result();
		$komentar = $this->m_komentar->getKomentarProdi($idpost)->result();
		$data = array(
			'title'			=>'Komentar',
			'view'			=>'komentar/prodi',
			'idtesti'		=>$idpost,
			'testimoni'		=>$testi,
			'komentar'		=>$komentar,
		);

		if($this->session->has_userdata('USERNAME_MHS')){
			$data['user']=$this->session->userdata('USERNAME_MHS');
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else if($this->session->has_userdata('USERNAME_SISWA')){
			$data['user']=$this->session->userdata('USERNAME_SISWA');
			$this->load->view('siswa/layout/wrapper', $data);
		}else{
			redirect('login');
		}
	}
	public function prodiSubmit(){
		$data = array(
			'IDTESTI'			=> $this->input->post('idtesti'),
			'USER'				=> $this->input->post('user'),
			'USERNAME_MHS'		=> $this->input->post('username_mhs'),
			'USERNAME_SISWA'	=> $this->input->post('username_siswa'),
			'KOMENPRODI'		=> $this->input->post('komentar'),
		);
		$this->m_komentar->inKomentarprodi($data);
		redirect('komentar/prodi/'.$data['IDTESTI']);
	}

	//////////////////////////////////////////////////////////////////////

	public function prodiuniv($idpost){
		$testi = $this->m_testimoni->get1TestiProdiuniv($idpost)->result();
		$komentar = $this->m_komentar->getKomentarProdiuniv($idpost)->result();
		$data = array(
			'title'			=>'Komentar',
			'view'			=>'komentar/prodiuniv',
			'idtesti'		=>$idpost,
			'testimoni'		=>$testi,
			'komentar'		=>$komentar,
		);

		if($this->session->has_userdata('USERNAME_MHS')){
			$data['user']=$this->session->userdata('USERNAME_MHS');
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else if($this->session->has_userdata('USERNAME_SISWA')){
			$data['user']=$this->session->userdata('USERNAME_SISWA');
			$this->load->view('siswa/layout/wrapper', $data);
		}else{
			redirect('login');
		}
	}
	public function prodiunivSubmit(){
		$data = array(
			'IDTESTI'			=> $this->input->post('idtesti'),
			'USER'				=> $this->input->post('user'),
			'USERNAME_MHS'		=> $this->input->post('username_mhs'),
			'USERNAME_SISWA'	=> $this->input->post('username_siswa'),
			'KOMENPRODIUNIV'	=> $this->input->post('komentar'),
		);
		$this->m_komentar->inKomentarprodiuniv($data);
		redirect('komentar/prodiuniv/'.$data['IDTESTI']);
	}

	//////////////////////////////////////////////////////////////////////

	public function universitas($idpost){
		$testi = $this->m_testimoni->get1TestiUniversitas($idpost)->result();
		$komentar = $this->m_komentar->getKomentaruniv($idpost)->result();
		$data = array(
			'title'			=>'Komentar',
			'view'			=>'komentar/universitas',
			'idtesti'		=>$idpost,
			'testimoni'		=>$testi,
			'komentar'		=>$komentar,
		);

		if($this->session->has_userdata('USERNAME_MHS')){
			$data['user']=$this->session->userdata('USERNAME_MHS');
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else if($this->session->has_userdata('USERNAME_SISWA')){
			$data['user']=$this->session->userdata('USERNAME_SISWA');
			$this->load->view('siswa/layout/wrapper', $data);
		}else{
			redirect('login');
		}
	}
	public function universitasSubmit(){
		$data = array(
			'IDTESTI'			=> $this->input->post('idtesti'),
			'USER'				=> $this->input->post('user'),
			'USERNAME_MHS'		=> $this->input->post('username_mhs'),
			'USERNAME_SISWA'	=> $this->input->post('username_siswa'),
			'KOMENUNIV'			=> $this->input->post('komentar'),
		);
		$this->m_komentar->inKomentaruniv($data);
		redirect('komentar/universitas/'.$data['IDTESTI']);
	}

}
