<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppid extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mberita');
	}

	public function index(){
		$data['title']			= "Beranda - ".web_info('nama_lengkap_website');
		$data['subtitle']		= "Beranda";
		$data['content']		= "beranda";
		$data['dashboard']		= "active";
		$this->load->view('ppid/index', $data);
	}

	public function halaman($slug){
		$d = $this->Mhalaman->readBySlug($slug)->row();

		$data['title']			= $d->judul_halaman." - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $d->judul_halaman;
		$data['content']		= "halaman";
		$data['data']			= $d;
		$this->load->view('ppid/index', $data);
	}

	public function informasi($slug){
		$d = $this->Minformasi->readBySlugKategori($slug)->result();
		$h = $this->Mkategori_informasi->readBySlug($slug)->row();

		$data['title']			= $h->kategori_informasi." - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $h->kategori_informasi;
		$data['content']		= "informasi";
		$data['data']			= $d;
		$this->load->view('ppid/index', $data);
	}

	public function kontak(){
		$d = $this->Mhalaman->readBySlug('kontak')->row();

		$data['title']			= $d->judul_halaman." - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $d->judul_halaman;
		$data['content']		= "halaman";
		$data['data']			= $d;
		$this->load->view('ppid/index', $data);
	}

	public function unduh(){
		$id = $this->input->get('id');
		$link = $this->input->get('link');

		if ($this->Minformasi->update_unduh($id)) {
			redirect($link);
		}
	}

}

/* End of file Ppid.php */
/* Location: .//C/Users/erikw/AppData/Local/Temp/fz3temp-2/Ppid.php */