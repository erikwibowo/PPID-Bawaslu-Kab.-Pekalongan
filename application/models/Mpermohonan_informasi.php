<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpermohonan_informasi extends CI_Model {

	public function create($data){
		return $this->db->insert('permohonan_informasi', $data);
	}

	public function read(){
		$this->db->order_by('created_at', 'desc');
		return $this->db->get('permohonan_informasi');
	}

	public function readById($id){
		$this->db->where('id_permohonan_informasi', $id);
		return $this->db->get('permohonan_informasi');
	}

	public function update($data, $id){
		$this->db->where('id_permohonan_informasi', $id);
		return $this->db->update('permohonan_informasi', $data);
	}

	public function delete($id){
		$this->db->where('id_permohonan_informasi', $id);
		return $this->db->delete('permohonan_informasi');
	}

}

/* End of file Mpermohonan_informasi.php */
/* Location: ./application/models/Mpermohonan_informasi.php */