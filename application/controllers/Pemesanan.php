<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

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
		$this->load->model('M_Pemesanan');
		$this->load->library(array('form_validation','session'));

		if(!$this->session->userdata('id'))
		{
			redirect('welcome');
		}

	}

	public function index()
	{
		$data['pemesanan'] = $this->M_Pemesanan->getDataPemesanan();
		$data['page']='Pemesanan.php';
		$this->load->view('Admin/menu',$data);
	}
}