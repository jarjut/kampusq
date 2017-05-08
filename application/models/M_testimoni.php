<?php
class M_testimoni extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getTestiProdi($prodi){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testijenisprodi a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDPRODI',$prodi);
		return $this->db->get();
	}
	public function get1TestiProdi($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testijenisprodi a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDTESTI',$id);
		return $this->db->get();
	}

	public function inTestiProdi($data){
		$this->db->insert('testijenisprodi',$data);
	}

	/////////////////////////////////////////////////////////

	public function getTestiProdiuniv($univ,$prodi){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testiprodiuniv a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDUNIV',$univ);
		$this->db->where('IDPRODI',$prodi);
		return $this->db->get();
	}

	public function get1TestiProdiuniv($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testiprodiuniv a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDTESTI',$id);
		return $this->db->get();
	}

	public function inTestiProdiuniv($data){
		$this->db->insert('testiprodiuniv',$data);
	}

	/////////////////////////////////////////////////////////

	public function getTestiUniversitas($univ){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testiuniversitas a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDUNIV',$univ);
		return $this->db->get();
	}

	public function get1TestiUniversitas($id){
		$this->db->select('a.*,b.NAMA_MHS,c.NAMA_UNIV,d.NAMA_PRODI');
		$this->db->from('testiuniversitas a');
		$this->db->join('mahasiswa b','a.USERNAME_MHS = b.USERNAME_MHS','inner');
		$this->db->join('universitas c','b.UNIV = c.IDUNIV','inner');
		$this->db->join('jenisprodi d','b.PRODI = d.IDPRODI','inner');
		$this->db->where('IDTESTI',$id);
		return $this->db->get();
	}


	public function inTestiUniversitas($data){
		$this->db->insert('testiuniversitas',$data);
	}	
}