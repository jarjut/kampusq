<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisprodi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_jenisprodi');
		$this->load->model('m_testimoni');
	}

	public function index()
	{
		$d = $this->m_jenisprodi->getProdi();
        $data = array(
			'title'			=>'Daftar Program Studi',
			'view'			=>'jenisprodi/daftarprodi',
			'jenisprodi'	=>$d->result()
		);

		if($this->session->has_userdata('USERNAME_MHS')){
			$data['user']=$this->session->userdata('USERNAME_MHS');
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else if($this->session->has_userdata('USERNAME_SISWA')){
			$data['user']=$this->session->userdata('USERNAME_SISWA');
			$this->load->view('siswa/layout/wrapper', $data);
		}
		else{
			$this->load->view('layout/wrapper', $data);
		}
	}
	public function infoProdi($id)
	{
		$d = $this->m_jenisprodi->getInfo($id)->result();
        foreach($d as $t){
        }
        $testi = $this->m_testimoni->getTestiProdi($id);
        $univ = $this->m_jenisprodi->getUniv($id);
        $data = array(
			'title'			=>$t->NAMA_PRODI,
			'view'			=>'jenisprodi/infoprodi',
			'info'			=>$t->NAMA_PRODI,
			'testimoni'		=>$testi->result(),
			'universitas'	=>$univ->result(),
			'id'			=>$id
		);

		if($this->session->has_userdata('USERNAME_MHS')){
			$data['user']=$this->session->userdata('USERNAME_MHS');
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else if($this->session->has_userdata('USERNAME_SISWA')){
			$data['user']=$this->session->userdata('USERNAME_SISWA');
			$this->load->view('siswa/layout/wrapper', $data);
		}
		else{
			$this->load->view('layout/wrapper', $data);
		}
	}
	
}
