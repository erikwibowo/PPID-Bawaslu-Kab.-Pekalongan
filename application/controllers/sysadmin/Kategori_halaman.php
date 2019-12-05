<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mkategori_halaman');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('kategori-halaman', 'r');
		$data['title']			= "Kategori Halaman - Admin ".web_info('nama_website');
		$data['subtitle']		= "Kategori Halaman";
		$data['content']		= "kategori-halaman";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mkategori_halaman->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('kategori-halaman', 'c');
		$data = array(
			'kategori_halaman'	=> $this->input->post('kategori_halaman'),
			'slug_kategori_halaman'	=> slug($this->input->post('kategori_halaman'))
		);
		if ($this->Mkategori_halaman->create($data)) {
			$this->session->set_flashdata('notif', 'Kategori Halaman berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Halaman gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-halaman','refresh');
	}

	public function delete($id){
		akses('kategori-halaman', 'd');
		if ($this->Mkategori_halaman->delete($id)) {
			$this->session->set_flashdata('notif', 'Kategori Halaman berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Halaman gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-halaman','refresh');
	}

	public function update(){
		akses('kategori-halaman', 'u');
		$data = array(
			'kategori_halaman'	=> $this->input->post('kategori_halaman'),
			'slug_kategori_halaman'	=> slug($this->input->post('kategori_halaman'))
		);
		if ($this->Mkategori_halaman->update($data, $this->input->post('id_kategori_halaman'))) {
			$this->session->set_flashdata('notif', 'Kategori Halaman berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Kategori Halaman gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/kategori-halaman','refresh');
	}

}

/* End of file Kategori_halaman.php */
/* Location: ./application/controllers/sysadmin/Kategori_halaman.php */