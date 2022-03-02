<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_listmobil extends CI_Model {

	function get_listmobil(){
		$galeri=$this->db->query("SELECT * FROM dt_listmobil ORDER BY id_mobil DESC");
		return $galeri;
	}
	function simpan_mobil($nama,$deskripsi,$bahan,$ac,$transmisi,$gambar){
		$this->db->trans_start();
            $this->db->query("insert into dt_listmobil(nama_mobil,deskripsi_mobil,bahan_mobil,ac_mobil,transmisi_mobil,gambar_mobil) values ('$nama','$deskripsi','$bahan','$ac','$transmisi','$gambar')");
             $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	function update_mobil($nama,$deskripsi,$bahan,$ac,$transmisi,$gambar,$mobil_id){
		$gallery=$this->db->query("update dt_listmobil set nama_mobil='$nama',deskripsi_mobil='$deskripsi',bahan_mobil='$bahan',ac_mobil='$ac',transmisi_mobil='$transmisi',gambar_mobil='$gambar' where id_mobil='$mobil_id'");
		return $gallery;
	}
	function update_mobil_tanpa_gambar($nama,$deskripsi,$bahan,$ac,$transmisi,$gambar,$mobil_id){
		$hsl=$this->db->query("update dt_listmobil set nama_mobil='$nama',deskripsi_mobil='$deskripsi',bahan_mobil='$bahan',ac_mobil='$ac',transmisi_mobil='$transmisi' where id_mobil='$mobil_id'");
		return $gallery;
	}
	function hapus_mobil($kode){
		$this->db->trans_start();
            $this->db->query("delete from dt_listmobil where id_mobil='$kode'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_gallery_home(){
		$gallery=$this->db->query("SELECT dt_gallery.*,DATE_FORMAT(tanggal_gallery,'%d/%m/%Y') AS tanggal,nama_album FROM dt_gallery join dt_album on id_album_gallery=id_album ORDER BY id_gallery DESC limit 4");
		return $gallery;
	}

	function get_gallery_by_album_id($id_album){
		$gallery=$this->db->query("SELECT dt_gallery.*,DATE_FORMAT(tanggal_gallery,'%d/%m/%Y') AS tanggal,nama_album FROM dt_gallery join dt_album on id_album_gallery=id_album where galeri_id_album='$id_album' ORDER BY id_gallery DESC");
		return $gallery;
	}
}

/* End of file m_gallery.php */
/* Location: ./application/models/m_gallery.php */