<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mhalaman');
		$this->load->model('Mkategori_halaman');

		if ($this->session->userdata('login') != 'berhasil') {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
	}

	public function index(){
		akses('halaman', 'r');
		$data['title']			= 'Data Halaman - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Data Halaman';
		$data['content']		= 'halaman';
		$data['jumlah']			= 1;
		$data['b1']				= $data['subtitle'];
		$data['b1a']			= '#';
		$data['data']			= $this->Mhalaman->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function tambah(){
		akses('halaman', 'c');
		$data['title']			= 'Tambah Data Halaman - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Tambah Data Halaman';
		$data['content']		= 'tambah-halaman';
		$data['jumlah']			= 2;
		$data['b1']				= 'Data Halaman';
		$data['b1a']			= site_url('sysadmin/halaman');
		$data['b2']				= $data['subtitle'];
		$data['b2a']			= '#';
		$data['kategori']		= $this->Mkategori_halaman->read()->result();
		$this->load->view('sysadmin/index', $data);
	}

	public function create(){
		akses('halaman', 'c');
		//echo json_encode($_FILES); die();
		$nm_file = "halaman_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/halaman/source/'; //folder untuk meyimpan foto
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
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/halaman/source/'.$data_upload['file_name'],
                    'new_image' => './files/halaman/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'id_kategori_halaman'	=> $this->input->post('id_kategori_halaman'),
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'		=> slug($this->input->post('judul_halaman')),
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'foto_halaman'	    	=> $data_upload['file_name'],
                    'thumb_halaman'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }else{
        		//echo "Foto tidak ada"; die();
                $data = array(
					'id_kategori_halaman'	=> $this->input->post('id_kategori_halaman'),
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'		=> slug($this->input->post('judul_halaman')),
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }
        }
		if ($this->Mhalaman->create($data)) {
			$this->session->set_flashdata('notif', 'Halaman berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Halaman gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/halaman','refresh');
	}

	public function edit($id){
		akses('halaman', 'u');
		$data['title']			= 'Edit Data Halaman - Admin '.web_info('nama_website');
		$data['subtitle']		= 'Edit Data Halaman';
		$data['content']		= 'edit-halaman';
		$data['jumlah']			= 2;
		$data['b1']				= 'Data Halaman';
		$data['b1a']			= site_url('sysadmin/halaman');
		$data['b2']				= $data['subtitle'];
		$data['b2a']			= '#';
		$data['kategori']		= $this->Mkategori_halaman->read()->result();
		$data['halaman']			= $this->Mhalaman->readById($id)->row_array();
		$this->load->view('sysadmin/index', $data);
	}

	public function update(){
		akses('halaman', 'u');
		//echo json_encode($_FILES); die();
		$nm_file = "halaman_".time(); //nama file + fungsi time
        $config['upload_path'] = './files/halaman/source/'; //folder untuk meyimpan foto
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
                $create_thumb = array(
                    'image_library' => 'gd2',
                    'source_image' => './files/halaman/source/'.$data_upload['file_name'],
                    'new_image' => './files/halaman/thumb/'.$data_upload['file_name'],
                    'maintain_ratio' => true,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'height' => 200,
                    'width' => 200
                );

                $this->image_lib->initialize($create_thumb);
                $this->image_lib->resize();

                $data = array(
					'id_kategori_halaman'	=> $this->input->post('id_kategori_halaman'),
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'		=> slug($this->input->post('judul_halaman')),
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'foto_halaman'	    	=> $data_upload['file_name'],
                    'thumb_halaman'	=> $nm_file.'_thumb'.$data_upload['file_ext'],
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
				$path = "./files/halaman/";
				unlink($path."source/".$this->input->post('foto_halaman'));
				unlink($path."thumb/".$this->input->post('thumb_halaman'));
            }else{
        		//echo "Foto tidak ada"; die();
                $data = array(
					'id_kategori_halaman'	=> $this->input->post('id_kategori_halaman'),
					'judul_halaman'		=> $this->input->post('judul_halaman'),
					'slug_halaman'		=> slug($this->input->post('judul_halaman')),
					'isi_halaman'			=> $this->input->post('isi_halaman'),
					'publish'			=> $this->input->post('publish'),
					'id_admin'			=> $this->session->userdata('id_admin')
				);
            }
        }
		if ($this->Mhalaman->update($data, $this->input->post('id_halaman'))) {
			$this->session->set_flashdata('notif', 'Halaman berhasil disimpan');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Halaman gagal disimpan');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/halaman','refresh');
	}

	public function delete(){
		akses('halaman', 'd');
		if ($this->Mhalaman->delete($this->input->get('id'))) {
			if (!empty($this->input->get('foto'))) {
				$path = "./files/halaman/";
				unlink($path."source/".$this->input->get('foto'));
				unlink($path."thumb/".$this->input->get('thumb'));
			}
			$this->session->set_flashdata('notif', 'Halaman berhasil dihapus');
			$this->session->set_flashdata('type', 'success');
		}else{
			$this->session->set_flashdata('notif', 'Halaman gagal dihapus');
			$this->session->set_flashdata('type', 'error');
		}
		redirect('sysadmin/halaman','refresh');
	}
}