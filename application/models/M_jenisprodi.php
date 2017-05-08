<?php
class M_jenisprodi extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getProdi(){
		$this->db->select('*');
		$this->db->from('jenisprodi');
		return $this->db->get();
	}
	public function getInfo($kodeprodi){
		$this->db->select('*');
		$this->db->from('jenisprodi');
		$this->db->where('IDPRODI',$kodeprodi);
		return $this->db->get();
	}
	public function getUniv($kodeprodi){
		$this->db->select('a.*,b.NAMA_UNIV');
		$this->db->from('prodiuniv a');
		$this->db->join('universitas b','a.IDUNIV = b.IDUNIV','inner');
		$this->db->where('IDPRODI',$kodeprodi);
		return $this->db->get();
	}
}