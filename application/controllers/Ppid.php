<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppid extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mberita');
		$this->load->model('Mpermohonan_informasi');
	}

	public function index(){
		$data['title']			= "Beranda - ".web_info('nama_lengkap_website');
		$data['subtitle']		= "Beranda";
		$data['content']		= "beranda";
		$data['dashboard']		= "active";
		$this->load->view('ppid/index', $data);
	}

	public function halaman($slug){
		$d = $this->Mhalaman->readBySlug($slug);

		if ($d->num_rows() == 0) {
			redirect('not-found','refresh');
		}

		$data['title']			= $d->judul_halaman." - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $d->judul_halaman;
		$data['content']		= "halaman";
		$data['data']			= $d->row();
		$this->load->view('ppid/index', $data);
	}

	public function informasi($slug){
		$d = $this->Minformasi->readBySlugKategori($slug);
		$h = $this->Mkategori_informasi->readBySlug($slug)->row();

		if ($d->num_rows() == 0) {
			redirect('not-found','refresh');
		}

		$data['title']			= $h->kategori_informasi." - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $h->kategori_informasi;
		$data['content']		= "informasi";
		$data['data']			= $d->result();
		$this->load->view('ppid/index', $data);
	}

	public function cari_informasi(){
		$q = $this->input->get('q');
		$d = $this->Minformasi->readCari($q);

		$data['title']			= "Hasil Pencarian untuk '".$q."'' - ".web_info('nama_lengkap_website');
		$data['subtitle']		= $d->num_rows() == 0 ? "Tidak menemukan hasil untuk '".$q."'":"Menampilkan hasil Pencarian untuk '".$q."'";
		$data['content']		= "cari-informasi";
		$data['data']			= $d->result();
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

	public function form_permohonan_informasi(){

		$data['title']			= "Form Permohonan Informasi - ".web_info('nama_lengkap_website');
		$data['subtitle']		= "Form Permohonan Informasi";
		$data['content']		= "form-permohonan-informasi";
		$this->load->view('ppid/index', $data);
	}

	public function proses_permohonan_informasi(){
		$nm_file = "ktp_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/ktp_pemohon/source/'; //folder untuk meyimpan foto
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['file_name'] = $nm_file;
        $this->upload->initialize($config);

        if(isset($_FILES['foto']['name'])){
            if($this->upload->do_upload('foto')){
        		//echo "Foto ada"; die();
                $data_upload = $this->upload->data();

                $data = array(
					'permohonan_informasi'	=> $this->input->post('permohonan_informasi'),
					'nama_pemohon'			=> $this->input->post('nama_pemohon'),
					'alamat_pemohon'		=> $this->input->post('alamat_pemohon'),
					'telp_pemohon'	    	=> $this->input->post('telp_pemohon'),
					'email_pemohon'			=> $this->input->post('email_pemohon'),
					'foto_ktp_pemohon'		=> $data_upload['file_name'],
					'permohonan_informasi'	=> $this->input->post('permohonan_informasi')
				);
            }
        }
		if ($this->Mpermohonan_informasi->create($data)) {
			$this->session->set_flashdata('notif', 'Permohonan Informasi berhasil diajukan, jika disetujui data akan dikirimkan ke email anda.');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Permohonan Informasi gagal diajukan, silahkan coba lagi.');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('ppid/form-permohonan-informasi','refresh');
	}

}

/* End of file Ppid.php */
/* Location: .//C/Users/erikw/AppData/Local/Temp/fz3temp-2/Ppid.php */