<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_informasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mkategori_informasi');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('kategori-informasi', 'r');
		$data['title']			= "Kategori Informasi - Admin ".web_info('nama_website');
		$data['subtitle']		= "Data Kategori Informasi";
		$data['content']		= "kategori-informasi";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mkategori_informasi->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('kategori-informasi', 'c');
		$data = array(
			'kategori_informasi'	=> $this->input->post('kategori_informasi'),
			'slug_kategori_informasi'	=> slug($this->input->post('kategori_informasi'))
		);
		if ($this->Mkategori_informasi->create($data)) {
			$this->session->set_flashdata('notif', 'Kategori Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-informasi','refresh');
	}

	public function delete($id){
		akses('kategori-informasi', 'd');
		if ($this->Mkategori_informasi->delete($id)) {
			$this->session->set_flashdata('notif', 'Kategori Informasi berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Informasi gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-informasi','refresh');
	}

	public function update(){
		akses('kategori-informasi', 'u');
		$data = array(
			'kategori_informasi'	=> $this->input->post('kategori_informasi'),
			'slug_kategori_informasi'	=> slug($this->input->post('kategori_informasi'))
		);
		if ($this->Mkategori_informasi->update($data, $this->input->post('id_kategori_informasi'))) {
			$this->session->set_flashdata('notif', 'Kategori Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-informasi','refresh');
	}

}

/* End of file Kategori_informasi.php */
/* Location: ./application/controllers/sysadmin/Kategori_informasi.php */