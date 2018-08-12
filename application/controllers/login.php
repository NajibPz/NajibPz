<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('aksi_login');
		$this->load->library('session');


	}

	function index(){
		$this->load->view('login');

	}
	function aksi_login(){
		$username = $this->input->post('Username');
		$password = $this->input->post('Password');
		$where = array(
			'nama' => $username,
			'password' => $password
			);
			$cek = $this->aksi_login->cek_login("admin",$where);
	    if($cek) {
	        redirect('index.php/admin/sudah');
	    }
	    else die('mati');
	}

	function logout(){
		$this->session->unset_userdata('sesi');
		redirect('');
	}
}
?>
