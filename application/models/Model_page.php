<?php
class Model_page extends CI_Model
{

	function semua($table) {
    return $this->db->get($table)->num_rows();
	}

	function baik($table) {
    return $this->db->get_where($table, array('kondisi'=>1));
	}

	function kurang($table) {
    return $this->db->get_where($table, array('kondisi'=>2));
	}

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tampil_baik($table){
		return $this->db->get_where($table, array('kondisi'=>1));
	}

	function tampil_kurang($table){
		return $this->db->get_where($table, array('kondisi'=>2));
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function edit_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}