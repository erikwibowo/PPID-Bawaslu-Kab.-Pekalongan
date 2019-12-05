<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Minformasi');
		$this->load->model('Mkategori_informasi');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('informasi', 'r');
		$data['title']			= "Informasi - Admin ".web_info('nama_website');
		$data['subtitle']		= "Data Informasi";
		$data['content']		= "informasi";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Minformasi->read()->result();
		$data['kategori']		= $this->Mkategori_informasi->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('informasi', 'c');
		$data = array(
			'nama_informasi'		=> $this->input->post('nama_informasi'),
			'id_kategori_informasi'	=> $this->input->post('id_kategori_informasi'),
			'link_informasi'		=> $this->input->post('link_informasi')
		);
		if ($this->Minformasi->create($data)) {
			$this->session->set_flashdata('notif', 'Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/informasi','refresh');
	}

	public function delete($id){
		akses('informasi', 'd');
		if ($this->Minformasi->delete($id)) {
			$this->session->set_flashdata('notif', 'Informasi berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Informasi gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/informasi','refresh');
	}

	public function update(){
		akses('informasi', 'u');
		
		$data = array(
			'nama_informasi'		=> $this->input->post('nama_informasi'),
			'id_kategori_informasi'	=> $this->input->post('id_kategori_informasi'),
			'link_informasi'		=> $this->input->post('link_informasi')
		);
		if ($this->Minformasi->update($data, $this->input->post('id_informasi'))) {
			$this->session->set_flashdata('notif', 'Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/informasi','refresh');
	}

}

/* End of file Informasi.php */
/* Location: ./application/controllers/sysadmin/Informasi.php */