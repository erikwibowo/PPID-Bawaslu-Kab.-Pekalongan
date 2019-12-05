<?php if ($content == "dashboard") {
	$this->load->view('sysadmin/dashboard');
}elseif ($content == "tabel") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "menu") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "level-admin") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "admin") {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "hak-akses") {
	$this->load->view('sysadmin/tabel');
}else if($content == 'profil'){
	$this->load->view('sysadmin/form');
}else if($content == 'halaman') {
	$this->load->view('sysadmin/tabel');
}else if($content == 'kategori-halaman') {
	$this->load->view('sysadmin/tabel');
}elseif ($content == "tambah-halaman") {
	$this->load->view('sysadmin/form');
}elseif ($content == "edit-halaman") {
	$this->load->view('sysadmin/form');
}elseif ($content == "edit-informasi") {
	$this->load->view('sysadmin/form');
}else if($content == 'informasi') {
	$this->load->view('sysadmin/tabel');
}else if($content == 'kategori-informasi') {
	$this->load->view('sysadmin/tabel');
}else if($content == 'permohonan-informasi') {
	$this->load->view('sysadmin/tabel');
}