<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testi extends CI_Model {

	function get_testi(){
		$pesanku=$this->db->query("SELECT dt_testi.*,DATE_FORMAT(tanggal_testi,'%d %M %Y') AS tanggal FROM dt_testi ORDER BY id_testi DESC");
		return $pesanku;
	}

		function hapus_testi($kode){
		$pesanku=$this->db->query("DELETE FROM dt_testi WHERE id_testi='$kode'");
		return $pesanku;
	}
}
/* End of file m_berita.php */
/* Location: ./application/models/m_berita.php */