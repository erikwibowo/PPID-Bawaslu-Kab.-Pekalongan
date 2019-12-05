<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhalaman extends CI_Model {

	public function create($data){
		return $this->db->insert('halaman', $data);
	}

	public function read(){
		$this->db->select('a.id_halaman, a.slug_halaman, a.judul_halaman, a.foto_halaman, a.thumb_halaman, a.publish, b.id_kategori_halaman, b.kategori_halaman, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_halaman b', 'a.id_kategori_halaman = b.id_kategori_halaman');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		return $this->db->get('halaman a');
	}

	public function readById($id){
		$this->db->select('a.id_halaman, a.slug_halaman, a.judul_halaman, a.foto_halaman, a.isi_halaman, a.thumb_halaman, a.publish, b.id_kategori_halaman, b.kategori_halaman, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_halaman b', 'a.id_kategori_halaman = b.id_kategori_halaman');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		$this->db->where('a.id_halaman', $id);
		return $this->db->get('halaman a');
	}

	public function readBySlug($slug_halaman){
		$this->db->select('a.id_halaman, a.slug_halaman, a.judul_halaman, a.foto_halaman, a.isi_halaman, a.thumb_halaman, a.publish, b.id_kategori_halaman, b.kategori_halaman, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_halaman b', 'a.id_kategori_halaman = b.id_kategori_halaman');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		$this->db->where('a.slug_halaman', $slug_halaman);
		return $this->db->get('halaman a');
	}

	public function readByKategori($id_kategori_halaman){
		$this->db->select('a.id_halaman, a.slug_halaman, a.judul_halaman, a.foto_halaman, a.isi_halaman, a.thumb_halaman, a.publish, b.id_kategori_halaman, b.kategori_halaman, c.id_admin, c.nama_admin, a.created_at as tanggal');
		$this->db->join('kategori_halaman b', 'a.id_kategori_halaman = b.id_kategori_halaman');
		$this->db->join('admin c', 'a.id_admin = c.id_admin');
		$this->db->where('a.id_kategori_halaman', $id_kategori_halaman);
		return $this->db->get('halaman a');
	}

	public function update($data, $id){
		$this->db->where('id_halaman', $id);
		return $this->db->update('halaman', $data);
	}

	public function delete($id){
		$this->db->where('id_halaman', $id);
		return $this->db->delete('halaman');
	}

}

/* End of file Mhalaman.php */
/* Location: ./application/models/Mhalaman.php */