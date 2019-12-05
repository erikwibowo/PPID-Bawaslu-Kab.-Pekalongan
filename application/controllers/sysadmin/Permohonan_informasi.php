<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan_informasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->model('Mpermohonan_informasi');

		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('permohonan-informasi', 'r');
		$data['title']			= "Permohonan Informasi - Admin ".web_info('nama_website');
		$data['subtitle']		= "Permohonan Informasi";
		$data['content']		= "permohonan-informasi";
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= "#";
		$data['data']			= $this->Mpermohonan_informasi->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('permohonan-informasi', 'c');
		$data = array(
			'kategori_halaman'	=> $this->input->post('kategori_halaman'),
			'slug_kategori_halaman'	=> slug($this->input->post('kategori_halaman'))
		);
		if ($this->Mpermohonan_informasi->create($data)) {
			$this->session->set_flashdata('notif', 'Permohonan Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Permohonan Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/permohonan-informasi','refresh');
	}

	public function delete(){
		akses('permohonan-informasi', 'd');
		$id = $this->input->get('id');
		if ($this->Mpermohonan_informasi->delete($id)) {
			if (!empty($this->input->get('foto'))) {
				$path = "./files/ktp_pemohon/";
				unlink($path."source/".$this->input->get('foto'));
			}
			$this->session->set_flashdata('notif', 'Permohonan Informasi berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Permohonan Informasi gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/permohonan-informasi','refresh');
	}

	public function update(){
		akses('permohonan-informasi', 'u');
		$data = array(
			'kategori_halaman'	=> $this->input->post('kategori_halaman'),
			'slug_kategori_halaman'	=> slug($this->input->post('kategori_halaman'))
		);
		if ($this->Mpermohonan_informasi->update($data, $this->input->post('id_kategori_halaman'))) {
			$this->session->set_flashdata('notif', 'Permohonan Informasi berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Permohonan Informasi gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/permohonan-informasi','refresh');
	}

}

/* End of file Permohonan_informasi.php */
/* Location: ./application/controllers/sysadmin/Permohonan_informasi.php */