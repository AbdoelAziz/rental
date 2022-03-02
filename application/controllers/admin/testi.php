<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_testi');
		$this->load->model('m_user');
		$this->load->model('m_album');
		$this->load->library('upload');
	}
	function index(){
		$data['data']=$this->m_testi->get_testi();
		$this->load->view('admin/v_testi',$data);
	}
	function hapus_testi(){
		$kode=$this->input->post('kode');
		$this->m_testi->hapus_testi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/testi');
	}

}				
	
/* End of file berita.php */
/* Location: ./application/controllers/admin/berita.php */