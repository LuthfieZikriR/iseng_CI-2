	<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_crud');
	}

	public function index()
	{
		$data['data'] = $this->m_crud->lihat();
		$this->load->view('v_input',$data);
	}

	public function tambah()
	{
		$ex = $this->m_crud->insert();
		if ($ex) {
			# code...
			echo "<script>alert('Berhasil Menambah data');</script>";
			redirect('login','refresh');
		}else{
			echo "<script>alert('Gagal Ditambahkan');</script>";
			redirect('login','refresh');
		}
	}

	public function hapus($nisn)
	{
		$this->m_crud->delete($nisn);
		echo "<script>alert('berhasil di hapus');</script>";
		redirect('login','refresh');
	}

	public function edit($nisn)
	{
		$data['data'] = $this->m_crud->edite($nisn)->row_array();
		$this->load->view('v_edit',$data);
	}

	public function update($nisn)
	{
		$cek = $this->m_crud->updatee($nisn);
		if ($cek) {
			echo "<script>alert('Berhasil')</script>";
			redirect('login','refresh');
		} else {
			echo "<script>alert('Gagal')</script>";
		}	
	}
	public function keluar()
	{
		$this->session->sess_destroy();	
		redirect('login','refresh');
	}
}

?>