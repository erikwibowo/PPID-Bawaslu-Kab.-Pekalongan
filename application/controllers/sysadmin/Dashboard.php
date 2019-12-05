<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('login') != "berhasil") {
			$this->session->set_flashdata('notif', 'Silahkan login terlebih dahulu');
			$this->session->set_flashdata('type', 'error');
			redirect('sysadminlogin','refresh');
		}
		$this->load->model('Minformasi');
		
	}

	public function index(){
		$data['title']			= "Dashboard - ".$this->session->userdata('level_admin')." ".web_info('nama_website');
		$data['subtitle']		= "Dashboard";
		$data['content']		= "dashboard";
		$data['dashboard']		= "active";
		$data['d1']				= $this->Minformasi->readByKategori(2)->num_rows();
		$data['d2']				= $this->Minformasi->readByKategori(3)->num_rows();
		$data['d3']				= $this->Minformasi->readByKategori(4)->num_rows();
		$data['d4']				= $this->Minformasi->readByKategori(5)->num_rows();
		$data['grafik']			= $this->grafik();
		$this->load->view('sysadmin/index', $data);
	}

	public function grafik(){
		$tahun = empty($this->input->get('tahun')) ? '2019':$this->input->get('tahun');
		$obj['berkala'] = array();
		$obj['saat'] = array();
		$obj['serta'] = array();
		$obj['kecuali'] = array();
		for ($i=1; $i <= 12 ; $i++) {
			$bulan = $i < 10 ? "0".$i:$i;
			$data = $this->Minformasi->grafik($bulan, $tahun, 2)->row();
			array_push($obj['berkala'], $data->jumlah);
		}
		for ($i=1; $i <= 12 ; $i++) {
			$bulan = $i < 10 ? "0".$i:$i;
			$data = $this->Minformasi->grafik($bulan, $tahun, 3)->row();
			array_push($obj['saat'], $data->jumlah);
		}
		for ($i=1; $i <= 12 ; $i++) {
			$bulan = $i < 10 ? "0".$i:$i;
			$data = $this->Minformasi->grafik($bulan, $tahun, 4)->row();
			array_push($obj['serta'], $data->jumlah);
		}
		for ($i=1; $i <= 12 ; $i++) {
			$bulan = $i < 10 ? "0".$i:$i;
			$data = $this->Minformasi->grafik($bulan, $tahun, 5)->row();
			array_push($obj['kecuali'], $data->jumlah);
		}
		return  (object)  $obj;
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/sysadmin/Dashboard.php */