<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pemesanan extends CI_Model {

	
	function getDataPemesanan()
	{
		$query = $this->db->query("SELECT pemesanan.*, product.id_product, product.nm_product, product.harga FROM pemesanan INNER JOIN product ON pemesanan.fk_product = product.id_product ORDER BY id_pemesanan ASC");
		return $query->result();
	}

	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}