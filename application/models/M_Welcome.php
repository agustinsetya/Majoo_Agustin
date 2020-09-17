<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Welcome extends CI_Model {

	public function getDataProduct($value='')
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->order_by('id_product');
		$query = $this->db->get();
		return $query->result();
	}

	function cek_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		return $this->db->get()->row();
	}

	function getdataID($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function getDataPemesanan($id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('id_product',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function addKePemesanan($id)
	{
		$object=array
		(
			'fk_product'=>$this->input->post('id_product'),
			'total_harga'=>$this->input->post('harga'),
			'nama_pemesan'=>$this->input->post('nama_pemesan'),
			'alamat_pemesan'=>$this->input->post('alamat_pemesan'),
			'telp_pemesan'=>$this->input->post('telp_pemesan'),
			'tgl_pesan'=>$this->input->post('tgl_pesan')
		);
		$this->db->insert('pemesanan',$object);
	}
}