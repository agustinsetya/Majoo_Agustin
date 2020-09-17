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
}