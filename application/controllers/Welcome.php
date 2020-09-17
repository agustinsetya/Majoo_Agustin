<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('M_Welcome');
	}

	public function index()
	{
		$data['product'] =$this->M_Welcome->getDataProduct();
		$this->load->view('homeUser', $data);
	}

	function aksi_login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$cek=$this->M_Welcome->cek_login($username,$password);
		$tes=count((array)$cek);
		if ($tes > 0 ) 
		{
			$data_login=$this->M_Welcome->cek_login($username,$password);
			$nama=$data_login->nama;
			$id=$data_login->id;
			$username=$data_login->username;
			$data=array(
				'nama' => $nama,
				'id' => $id,
				'username' => $username);
			$this->session->set_userdata($data);
			redirect('Product');
		}
		else
		{
			echo "<script>alert('Username atau Password salah!!');history.go(-1);</script>";
		}
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect(base_url('Welcome'));
	}
}
