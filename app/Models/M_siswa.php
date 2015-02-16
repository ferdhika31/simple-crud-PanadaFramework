<?php 
	/**
		* @Author				: Localhost {Ferdhika Yudira}
		* @Email				: fer@dika.web.id
		* @Web					: http://dika.web.id
		* @Date					: 2015-02-16 16:52:14
	**/
namespace Models;
use Resources;

class M_siswa{
	public function __construct(){
		// DB koneksi default
		$this->db = new Resources\Database;
		$this->tb = "tb_siswa"; //nama tabel database
    }

    public function simpan($data=array()){
    	$query = $this->db->insert($this->tb, $data); 
    }

    public function ubah($isi=array(),$id=array()){
    	$query = $this->db->update($this->tb, $isi, $id); 
    }

    public function tampil(){
    	//$query = $this->db->results("select * from ".$this->tb.""); //query
    	$query = $this->db->select()->from($this->tb)->getAll(); 
    	return $query;
    }

    public function lihat($id){
    	$query = $this->db->select()->from($this->tb)->where('id', '=', $id)->getOne();
    	return $query;
    }

    public function hapus($id){
    	$query = $this->db->delete($this->tb, array('id' => $id)); 
    }
}