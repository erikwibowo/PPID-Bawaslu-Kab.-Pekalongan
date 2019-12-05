<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberita extends CI_Model {

	public function beritaLimit(){
		$url = "http://pekalongankab.bawaslu.go.id/ppid/berita_limit.php";
		$konten = file_get_contents($url);
		$data = json_decode($konten, true);
		return $data;
	}

	public function berita(){
		$url = "http://pekalongankab.bawaslu.go.id/ppid/berita.php";
		$konten = file_get_contents($url);
		$data = json_decode($konten, true);
		return $data;
	}

}

/* End of file Mberita.php */
/* Location: .//C/Users/erikw/AppData/Local/Temp/fz3temp-2/Mberita.php */