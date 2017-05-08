<?php
class M_mahasiswa extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getUser($username)
	{
		$this->db->select('a.*,b.NAMA_UNIV,c.NAMA_PRODI');
		$this->db->from('mahasiswa a');
		$this->db->join('universitas b','a.UNIV = b.IDUNIV','inner');
		$this->db->join('jenisprodi c','a.PRODI = c.IDPRODI','inner');
		$this->db->where('USERNAME_MHS',$username);
		return $this->db->get();
	}
	public function register($array){
		$this->db->insert('mahasiswa',$array);
		return $this->db->affected_rows();
	}
	public function validasi($data){		
		$user = $this->db->get_where('mahasiswa',$data);	
		return $user->num_rows();
	}
}