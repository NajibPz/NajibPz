<?php
class Admin extends CI_Controller{
  public function sudah(){
    $this->load->view('dashboard.php');
  }

  function __construct(){
    parent::__construct();
    $this->load->model('aksi_login');
    $this->load->library('session');
  }

  function aksi_login(){
    $this->load->controller('login');
    $cek = $this->aksi_login->cek_login("admin",$where);
    if($cek) {
        redirect('');
    }
    else die('mati');
  }
}

?>
