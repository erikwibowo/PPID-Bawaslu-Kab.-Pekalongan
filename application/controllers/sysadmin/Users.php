<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


				public function __construct(){
parent::__construct();$this->load->model('Musers');

if ($this->session->userdata('login') != 'berhasil') {
				$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
				$this->session->set_flashdata('type', 'error');
				redirect('sysadminlogin','refresh');
				}
}public function index(){
				akses(users', 'r');
				$data['title']			= 'Data Data pegawai - Admin '.web_info('nama_website');
				$data['subtitle']		= 'Data Data pegawai';
				$data['content']		= 'users';
				$data['jumlah']			= 1;
				$data['b1']				= $data['subtitle'];
				$data['b1a']			= '#';
				$data['data']			= '';
				$this->load->view('sysadmin/index', $data);
				}

}