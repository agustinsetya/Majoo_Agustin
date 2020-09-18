<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->model('M_Product');
		$this->load->library(array('form_validation','session'));

		if(!$this->session->userdata('id'))
		{
			redirect('Welcome');
		}
	}

	public function index()
	{
		$data['product'] = $this->M_Product->getDataProduct();
		$data['page']='product.php';
		$this->load->view('Admin/menu',$data);
	}

	public function addProduct()
	{
		$data['page']='addProduct.php';
		$this->load->view('Admin/menu',$data);
	}

	public function simpanProduct()
	{
		$data = array();
		$this->load->helper('url','form');
		$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');
		$this->form_validation->set_rules('nm_product', 'Nama Product', 'trim|required|is_unique[product.nm_product]');
		$this->form_validation->set_rules('detail', 'Detail Product', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

		if($this->form_validation->run()==FALSE){
			$data['page']='addProduct.php';
			$this->load->view('Admin/menu',$data);
		}else{
			$upload = $this->M_Product->upload();
			if($upload['result'] == "success"){ // Jika proses upload sukses
				$this->M_Product->inputProduct($upload);
				$this->session->set_flashdata('success','Tambah Product berhasil');
				redirect('Product');
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error'];
				$this->session->set_flashdata('error',$data['message']);
				redirect('Product');
			}
		}
	}

	public function editProduct($id){
		$where = array('id_product' => $id);
		$data['product'] = $this->M_Product->getDataID($where,'product')->result();
		$data['page']='editProduct.php';
		$this->load->view('Admin/menu',$data);
	}

	public function prosesEditProduct($id)
	{
		$Gambar = $_FILES['image']['name'];      
		if ($Gambar != null) {
			$uploadphoto = $this->M_Product->upload();
			if($uploadphoto['result'] == 'success'){ 
				// Jika proses uploadphoto sukses
				$this->M_Product->updateProduct($id, $uploadphoto['file']['file_name']);
				$this->session->set_flashdata('success','Product Berhasil Diubah');
				redirect('Product','refresh');
			}else{ // Jika proses uploadphoto gagal
				$data['message'] = $uploadphoto['error'];
				$this->session->set_flashdata('error',$data['message']);
				redirect('Product','refresh');
			}
		}else{
			$this->M_Product->updateProduct($id);
			$this->session->set_flashdata('success','Product Berhasil Diubah');
			redirect('Product','refresh');
		}
	}

	function hapusProduct($id)
	{
		$where = array('id_product' => $id);
		$this->M_Product->hapus($where,'product');
		$this->session->set_flashdata('success','Data Product Berhasil Dihapus');
		redirect('Product');
	}
}
