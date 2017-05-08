<?php
class M_universitas extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	public function getUniv(){
		$this->db->select('*');
		$this->db->from('universitas');
		return $this->db->get();
	}
	public function getInfo($kodeuniv){
		$this->db->select('*');
		$this->db->from('universitas');
		$this->db->where('IDUNIV',$kodeuniv);
		return $this->db->get();
	}
	public function getProdiUniv($kodeuniv){
		$this->db->select('a.*,b.NAMA_PRODI');
		$this->db->from('prodiuniv a');
		$this->db->join('jenisprodi b','a.IDPRODI = b.IDPRODI','inner');
		$this->db->where('IDUNIV',$kodeuniv);
		return $this->db->get();
	}
}