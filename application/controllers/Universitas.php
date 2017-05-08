<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_universitas');
		$this->load->model('m_testimoni');
	}

	public function index()
	{
		$d = $this->m_universitas->getUniv();
        $data = array(
			'title'			=>'Daftar Universitas',
			'view'			=>'universitas/universitas',
			'universitas'	=>$d->result(),
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
	public function infoUniv($id)
	{
		$d = $this->m_universitas->getInfo($id)->result();
        foreach($d as $t){
        }
        $testi = $this->m_testimoni->getTestiUniversitas($id);
        $data = array(
        	'iduniv'		=>$t->IDUNIV,
			'title'			=>$t->NAMA_UNIV,
			'view'			=>'universitas/infouniversitas',
			'nama'			=>$t->NAMA_UNIV,
        	'alamat'		=>$t->ALAMAT_UNIV,
        	'akreditas'		=>$t->AKREDITASI_UNIV,
        	'website'		=>$t->WEBSITE,
        	'info'			=>$t->INFOUMUM,
        	'testimoni'		=>$testi->result(),
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
	public function prodiuniv($id)
	{
		$prodi = $this->m_universitas->getProdiUniv($id);
		$d = $this->m_universitas->getInfo($id)->result();
        foreach($d as $t){
        }
		$data = array(
			'title'			=>'Daftar Program Studi',
			'view'			=>'universitas/prodiuniv',
			'nama'			=>$t->NAMA_UNIV,
			'iduniv'		=>$t->IDUNIV,
			'prodiuniv'		=>$prodi->result(),
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
	public function infoprodiuniv($iduniv,$idprodi)
	{
		$this->load->model('m_jenisprodi');
		$e = $this->m_jenisprodi->getInfo($idprodi)->result();
        foreach($e as $prodi){
        }
		$d = $this->m_universitas->getInfo($iduniv)->result();
        foreach($d as $t){
        }
        $testi = $this->m_testimoni->getTestiProdiuniv($iduniv,$idprodi);
        $data = array(
			'title'			=>$t->NAMA_UNIV,
			'view'			=>'universitas/infoprodiuniv',
			'univ'			=>$t->NAMA_UNIV,
			'prodi'			=>$prodi->NAMA_PRODI,
			'iduniv'		=>$iduniv,
			'idprodi'		=>$idprodi,
			'testimoni'		=>$testi->result(),
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
