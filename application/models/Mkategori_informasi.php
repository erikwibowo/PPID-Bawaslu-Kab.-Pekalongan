<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori_informasi extends CI_Model {

	public function create($data){
		return $this->db->insert('kategori_informasi', $data);
	}

	public function read(){
		return $this->db->get('kategori_informasi');
	}

	public function readByJumlah(){
		$this->db->select('*, (select count(id_kategori_informasi) from informasi where id_kategori_informasi = a.id_kategori_informasi) as jumlah');
		return $this->db->get('kategori_informasi a');
	}

	public function readById($id){
		$this->db->where('id_kategori_informasi', $id);
		return $this->db->get('kategori_informasi');
	}

	public function readBySlug($slug_kategori_informasi){
		$this->db->where('slug_kategori_informasi', $slug_kategori_informasi);
		return $this->db->get('kategori_informasi');
	}

	public function update($data, $id){
		$this->db->where('id_kategori_informasi', $id);
		return $this->db->update('kategori_informasi', $data);
	}

	public function delete($id){
		$this->db->where('id_kategori_informasi', $id);
		return $this->db->delete('kategori_informasi');
	}

}

/* End of file Mkategori_informasi.php */
/* Location: ./application/models/Mkategori_informasi.php */