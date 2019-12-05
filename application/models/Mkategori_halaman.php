<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori_halaman extends CI_Model {

	public function create($data){
		return $this->db->insert('kategori_halaman', $data);
	}

	public function read(){
		return $this->db->get('kategori_halaman');
	}

	public function readById($id){
		$this->db->where('id_kategori_halaman', $id);
		return $this->db->get('kategori_halaman');
	}

	public function update($data, $id){
		$this->db->where('id_kategori_halaman', $id);
		return $this->db->update('kategori_halaman', $data);
	}

	public function delete($id){
		$this->db->where('id_kategori_halaman', $id);
		return $this->db->delete('kategori_halaman');
	}

}

/* End of file Mkategori_halaman.php */
/* Location: ./application/models/Mkategori_halaman.php */