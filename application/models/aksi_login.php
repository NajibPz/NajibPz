<?php

class Aksi_login extends CI_Model{
	function cek_login($table, $where) {
    $que = $this->db->get_where($table,$where);
    if( $que->num_rows() > 0 ) {
        $data= array(
            'username'  => $que->row()->nama,
            'logged_in' => TRUE
        );
        $this->session->set_userdata('sesi', $data);
        return TRUE;
    }
  	else return FALSE; //user tak ditemukan
	}
		public function keamanan(){
			$this->session->get_userdata('sesi');
			if($username > 0){
				$this->session->sess_destroy('nama');
				redirect('index.php/login');
			}
		}
}
?>
