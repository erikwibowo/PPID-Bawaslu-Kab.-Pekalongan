<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minformasi extends CI_Model {

	public function create($data){
		return $this->db->insert('informasi', $data);
	}

	public function read(){
		$this->db->join('kategori_informasi b', 'a.id_kategori_informasi = b.id_kategori_informasi');
		return $this->db->get('informasi a');
	}

	public function readByKategori($id_kategori_informasi){
		$this->db->join('kategori_informasi b', 'a.id_kategori_informasi = b.id_kategori_informasi');
		$this->db->where('a.id_kategori_informasi', $id_kategori_informasi);
		return $this->db->get('informasi a');
	}

	public function readBySlugKategori($slug_kategori_informasi){
		$this->db->join('kategori_informasi b', 'a.id_kategori_informasi = b.id_kategori_informasi');
		$this->db->where('b.slug_kategori_informasi', $slug_kategori_informasi);
		return $this->db->get('informasi a');
	}

	public function readById($id){
		$this->db->join('kategori_informasi b', 'a.id_kategori_informasi = b.id_kategori_informasi');
		$this->db->where('a.id_informasi', $id);
		return $this->db->get('informasi a');
	}

	public function readCari($q){
		$this->db->join('kategori_informasi b', 'a.id_kategori_informasi = b.id_kategori_informasi');
		$this->db->like('nama_informasi', $q, 'BOTH');
		return $this->db->get('informasi a');
	}

	public function grafik($bulan, $tahun, $kategori){
		return $this->db->query("SELECT COUNT(id_informasi) as jumlah FROM informasi WHERE MONTH(created_at) = '$bulan' AND YEAR(created_at) = '$tahun' AND id_kategori_informasi = '$kategori'");
	}

	public function update($data, $id){
		$this->db->where('id_informasi', $id);
		return $this->db->update('informasi', $data);
	}

	public function delete($id){
		$this->db->where('id_informasi', $id);
		return $this->db->delete('informasi');
	}


	// ------------------------FRONT END-----------------------

	public function ReadInfoBerkala(){
		$this->db->where('id_kategori_informasi','2');
		return $this->db->get('informasi');
	}

	public function ReadInfoDikecualikan(){
		$this->db->where('id_kategori_informasi','5');
		return $this->db->get('informasi');
	}

	public function ReadInfoTiapSaat(){
		$this->db->where('id_kategori_informasi','3');
		return $this->db->get('informasi');
	}

	public function ReadInfoSertaMerta(){
		$this->db->where('id_kategori_informasi','4');
		return $this->db->get('informasi');
	}

	public function update_unduh($id){
		return $this->db->query("UPDATE informasi set unduhan_informasi = unduhan_informasi+1 WHERE id_informasi = '$id'");
	}
}

/* End of file Minformasi.php */
/* Location: ./application/models/Minformasi.php */