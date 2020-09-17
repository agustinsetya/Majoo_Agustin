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

	public function pemesanan($id)
	{
		$where = array('id_product' => $id);
		$data['product'] = $this->M_Welcome->getDataID($where,'product')->result();
		$data['pesanan'] = $this->M_Welcome->getDataPemesanan($id);
		$this->load->view('pemesanan',$data);
	}

	function prosesPemesanan($id){
		$this->M_Welcome->addKePemesanan($id);
		$this->session->set_flashdata('success','Data Pemesanan Berhasil Ditambah');
		redirect('Welcome');
	}

	// function prosesPemesanan($id){
	// 	$nama_pemesan = $this->input->post('nama_pemesan', TRUE);
	// 	$alamat_pemesan = $this->input->post('alamat_pemesan', TRUE);
	// 	$telp_pemesan = $this->input->post('telp_pemesan', TRUE);
	// 	$tgl_pesan = date("Y-m-d");
	// 	$this->M_Welcome->addKePemesanan($nama_pemesan, $alamat_pemesan, $telp_pemesan, $tgl_pesan);
		
	// 	$this->session->set_flashdata('success','Data Pemesanan Berhasil Ditambah');
	// 	redirect('Welcome');
	// }
}
