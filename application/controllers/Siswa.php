<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
	}

	public function login() { 
		
		$data=array(
			'USERNAME_SISWA'	=>$this->input->post('username'),
			'PASS_SISWA'		=>$this->input->post('pwd')
			);

		// Berfungsi untuk memanggil fungsi ambil_data pada class login_model
		$cek=$this->m_siswa->validasi($data);
		if($cek == 1) { // Berfungsi untuk mengecek kebenaran data login yang diinput (1 = true)

			// Berfungsi untuk menyimpan user data
			$this->session->set_userdata($data);
			// Jika data yang dimasukkan valid maka akan redirect ke halaman Dashboard
			$redirect = array(
				'url'		=> base_url('siswa/dashboard'),
				'isi'		=> "Login Berhasil"
			);
			$this->load->view('redirect',$redirect);	
		}else{ // Jika data yang diinput tidak valid maka akan dialihkan ke view login gagal
			$data['loginfail'] = true;
			$this->session->set_flashdata($data);
			redirect('login/siswa');
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
			'USERNAME_SISWA'		=> $this->input->post('username'),
			'EMAIL_SISWA'			=> $this->input->post('email'),
			'PASS_SISWA'			=> $this->input->post('pass'),
			'NAMA_SISWA'			=> $this->input->post('nama'),
			'TMPTLHR_SISWA'			=> $this->input->post('tmptlhr'),
			'TGLLHR_SISWA'			=> $this->input->post('tgllhr'),
			'ASALSEKOLAH'			=> $this->input->post('asal'),
			'JURUSAN'				=> $this->input->post('jurusan'),
			);
		$check['USERNAME_SISWA']=$this->input->post('username');
		$exist = $this->m_siswa->validasi($check);
		if ($exist==1){
			$isi = "Username Sudah Terdaftar";
			$url = base_url('registrasi/siswa');
		}
		else{
			$this->m_siswa->register($dataregis);
			$isi = "Registrasi Sukses";
			$url = base_url('login/siswa');
		}
		$redirect = array(
			'url'		=> $url,
			'isi'		=> $isi
		);
		$this->load->view('redirect',$redirect);
	}

	public function dashboard(){
		if($this->session->has_userdata('USERNAME_SISWA')){
			$d = $this->m_siswa->getUser($this->session->userdata('USERNAME_SISWA'))->result();
			foreach ($d as $t){}
			$data = array(
				'title'			=>'Dashboard',
				'view'			=>'siswa/dashboard',
				'nama'			=>$t->NAMA_SISWA,
				'user'			=>$t->USERNAME_SISWA
			);
			$this->load->view('siswa/layout/wrapper', $data);
		}
		else{
			redirect('login/siswa');
		}
	}
	public function profil(){
		$d = $this->m_siswa->getUser($this->session->userdata('USERNAME_SISWA'))->result();
        foreach($d as $t){
        }
        $data = array(
			'title'			=>'Data Profil',
			'view'			=>'siswa/profil',
			'user'			=>$t->USERNAME_SISWA,
			'nama'			=>$t->NAMA_SISWA,
        	'tempatlahir'	=>$t->TMPTLHR_SISWA,
        	'tgllahir'		=>$t->TGLLHR_SISWA,
        	'asalsekolah'	=>$t->ASALSEKOLAH,
        	'jurusan'		=>$t->JURUSAN,
		);
		$this->load->view('mahasiswa/layout/wrapper', $data);
	}
}
