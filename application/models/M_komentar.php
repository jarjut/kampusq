<?php
class M_komentar extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getKomentarProdi($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI,e.NAMA_SISWA,e.JURUSAN,e.ASALSEKOLAH');
		$this->db->from('komenprodi a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','left');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','left');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','left');
		$this->db->join('siswa e','a.USERNAME_SISWA = e.USERNAME_SISWA','left');
		$this->db->where('IDTESTI',$id);
		$this->db->order_by('TIME', 'ASC');
		return $this->db->get();
	}
	public function inKomentarprodi($data){
		$this->db->insert('komenprodi',$data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////

	public function getKomentarProdiuniv($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI,e.NAMA_SISWA,e.JURUSAN,e.ASALSEKOLAH');
		$this->db->from('komenprodiuniv a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','left');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','left');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','left');
		$this->db->join('siswa e','a.USERNAME_SISWA = e.USERNAME_SISWA','left');
		$this->db->where('IDTESTI',$id);
		$this->db->order_by('TIME', 'ASC');
		return $this->db->get();
	}
	public function inKomentarprodiuniv($data){
		$this->db->insert('komenprodiuniv',$data);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////

	public function getKomentaruniv($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI,e.NAMA_SISWA,e.JURUSAN,e.ASALSEKOLAH');
		$this->db->from('komenuniv a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','left');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','left');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','left');
		$this->db->join('siswa e','a.USERNAME_SISWA = e.USERNAME_SISWA','left');
		$this->db->where('IDTESTI',$id);
		$this->db->order_by('TIME', 'ASC');
		return $this->db->get();
	}
	public function inKomentaruniv($data){
		$this->db->insert('komenuniv',$data);
	}
}