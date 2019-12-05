<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {


				public function __construct(){
parent::__construct();$this->load->model('Mkomentar');

if ($this->session->userdata('login') != 'berhasil') {
				$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
				$this->session->set_flashdata('type', 'error');
				redirect('sysadminlogin','refresh');
				}
}public function index(){
				akses(komentar', 'r');
				$data['title']			= 'Data Komentar - Admin '.web_info('nama_website');
				$data['subtitle']		= 'Data Komentar';
				$data['content']		= 'komentar';
				$data['jumlah']			= 1;
				$data['b1']				= $data['subtitle'];
				$data['b1a']			= '#';
				$data['data']			= '';
				$this->load->view('sysadmin/index', $data);
				}

}