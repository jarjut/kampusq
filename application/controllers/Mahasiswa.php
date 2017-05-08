<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	private $isi = "";
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function login() { 

		$data=array(
			'USERNAME_MHS'	=>$this->input->post('username'),
			'PASS_MHS'		=>$this->input->post('pwd')
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->m_mahasiswa->validasi($data);
		if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)
			$d = $this->m_mahasiswa->getUser($this->input->post('username'))->result();
			foreach($d as $t){
        	}
			// Berfungsi untuk menyimpan user data
			$data['PRODI']		= $t->PRODI;
			$data['NAMA_PRODI']	= $t->NAMA_PRODI;
			$data['UNIV']		= $t->UNIV;
			$data['NAMA_UNIV']	= $t->NAMA_UNIV;
			$this->session->set_userdata($data);
			// Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
			$redirect = array(
				'url'		=> base_url('mahasiswa/dashboard'),
				'isi'		=> "Login Berhasil"
			);
			$this->load->view('redirect',$redirect);	
			//redirect('mahasiswa/dashboard');
		}else{ 
			$data['loginfail'] = true;
			$this->session->set_flashdata($data);
			redirect('login/mahasiswa');
		}
	}

	// Berfungsi untuk menghapus session atau logout
	public function logout() {
		session_destroy();
		redirect('beranda');
	}
	public function register()
	{
		$dataregis = array(
			'USERNAME_MHS'		=> $this->input->post('username'),
			'NIM'				=> $this->input->post('nim'),
			'EMAIL_MHS'			=> $this->input->post('email'),
			'PASS_MHS'			=> $this->input->post('pass'),
			'NAMA_MHS'			=> $this->input->post('nama'),
			'UNIV'				=> $this->input->post('pt'),
			'PRODI'				=> $this->input->post('prodi'),
			'TMPTLHR_MHS'		=> $this->input->post('tmptlhr'),
			'TGLLHR_MHS'		=> $this->input->post('tgllhr'),
			);
		$check['USERNAME_MHS']=$this->input->post('username');
		$exist = $this->m_mahasiswa->validasi($check);
		if ($exist==1){
			$isi = "Username Sudah Terdaftar";
			$url = base_url('registrasi/mahasiswa');
		}
		else{
			$this->m_mahasiswa->register($dataregis);
			$isi = "Registrasi Sukses";
			$url = base_url('login/mahasiswa');
		}
		$redirect = array(
			'url'		=> $url,
			'isi'		=> $isi
		);
		$this->load->view('redirect',$redirect);
		//redirect(base_url());
	}
	public function dashboard(){
		if($this->session->has_userdata('USERNAME_MHS')){
			$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
			foreach ($d as $t){}
			$data = array(
				'title'			=>'Dashboard',
				'view'			=>'mahasiswa/dashboard',
				'nama'			=>$t->NAMA_MHS,
				'prodi'			=>$t->NAMA_PRODI,
				'idprodi'		=>$t->PRODI,
				'univ'			=>$t->NAMA_UNIV,
				'iduniv'		=>$t->UNIV,	
				'user'			=>$t->USERNAME_MHS
			);
			$this->load->view('mahasiswa/layout/wrapper', $data);
		}
		else{
			redirect('login/mahasiswa');
		}
	}
	public function profil(){
		$d = $this->m_mahasiswa->getUser($this->session->userdata('USERNAME_MHS'))->result();
        foreach($d as $t){
        }
        $data = array(
			'title'			=>'Data Profil',
			'view'			=>'mahasiswa/profil',
			'user'			=>$t->USERNAME_MHS,
			'nama'			=>$t->NAMA_MHS,
        	'tempatlahir'	=>$t->TMPTLHR_MHS,
        	'tgllahir'		=>$t->TGLLHR_MHS,
        	'nim'			=>$t->NIM,
        	'univ'			=>$t->NAMA_UNIV,
        	'prodi'			=>$t->NAMA_PRODI,
		);
		$this->load->view('mahasiswa/layout/wrapper', $data);
	}
}
