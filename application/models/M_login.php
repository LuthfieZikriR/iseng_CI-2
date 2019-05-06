<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model 	{

	function __construct()
	{
		$this->load->database();
	}
	function login(){
		$this->db->where('username', $this->input->post('user'));
		$this->db->where('password', $this->input->post('pass'));
		$row = $this->db->get('tbl_user');
			if ($row->num_rows() > 0) {
				$data = $row->row_array();
				$nama = array(
					'login' => TRUE,
					'id_user' => $data['id'],
					'username' => $data['username']
				);
				$this->session->set_userdata($nama);
				return true;
			}else{
				return false;
			}
	}
}

 ?>

