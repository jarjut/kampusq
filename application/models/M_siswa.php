<?php
class M_siswa extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getUser($username)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('USERNAME_SISWA',$username);
		return $this->db->get();
	}
	public function register($array){
		$this->db->insert('siswa',$array);
		return $this->db->affected_rows();
	}
	public function validasi($data){		
		$user = $this->db->get_where('siswa',$data);	
		return $user->num_rows();
	}
}
