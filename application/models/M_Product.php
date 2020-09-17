<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

	
	function getDataProduct()
	{
		$query = $this->db->query("Select * from product");
		return $query->result();
	}

	public function upload(){
		$config['upload_path'] = './Gambar/'; //definisi folder yg telah dibuat di root project
		$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';
		$config['max_size'] = '1024';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('image')){ // Lakukan upload dan Cek jika proses upload berhasil
		// Jika berhasil :
			$fileData = $this->upload->data();
			$config['image_library'] = 'gd2';  
			$config['source_image'] = './Gambar/'.$fileData["file_name"];  
			$config['create_thumb'] = FALSE;  
			$config['maintain_ratio'] = FALSE;  
			$config['quality'] = '100%';  
			// $config['width'] = 1024;
			// $config['height'] = 768;
			$config['new_image'] = './Gambar/'.$fileData["file_name"];  
			$this->load->library('image_lib', $config);  
			$this->image_lib->resize();  
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
		// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function getdataID($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function updateProduct($id, $upload_name = null){
		$data = array(
			'nm_product'=>$this->input->post('nm_product'),
			'detail'=>$this->input->post('detail'),
			'harga'=>$this->input->post('harga'),
		);
		$data = $this->input->post();
		if($upload_name!=null){
			$data['gambar'] = $upload_name;
		}
		$this->db->where('id_product',$id);
		if($this->db->update("product",$data)){
			return "Berhasil";
		}
	}

	public function inputProduct($upload)
	{
		$data=array
		(
			'nm_product'=>$this->input->post('nm_product'),
			'detail'=>$this->input->post('detail'),
			'harga'=>$this->input->post('harga'),
			'gambar' => $upload['file']['file_name']
		);
		$this->db->insert('product', $data);
	}

	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}