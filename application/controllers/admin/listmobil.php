<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listmobil extends CI_Controller {
  function __construct(){
    parent::__construct();
    if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
    $this->load->model('m_album');
    $this->load->model('m_listmobil');
    $this->load->model('m_user');
    $this->load->library('upload');
  }
  function index(){
    
    $x['data']=$this->m_listmobil->get_listmobil();
    $this->load->view('admin/v_listmobil',$x);
  }
  
  function simpan_mobil(){
        $config['upload_path'] = './assets/img/car/'; //path folder
              $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
              $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['filefoto']['name']))
              {
                  if ($this->upload->do_upload('filefoto'))
                  {
                          $gbr = $this->upload->data();
                          //Compress Image
                          $config['image_library']='gd2';
                          $config['source_image']='./assets/img/car/'.$gbr['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '60%';
                          $config['width']= 500;
                          $config['height']= 400;
                          $config['new_image']= './assets/img/car/'.$gbr['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();

                          $gambar=$gbr['file_name'];
                          $nama=strip_tags($this->input->post('xnama'));
                          $deskripsi=strip_tags($this->input->post('xdeskripsi'));
                          $ac=strip_tags($this->input->post('xac'));
                          $bahan=strip_tags($this->input->post('xbahan'));
                          $transmisi=strip_tags($this->input->post('xtransmisi'));
        
              $this->m_listmobil->simpan_mobil($nama,$deskripsi,$bahan,$ac,$transmisi,$gambar);
              echo $this->session->set_flashdata('msg','success');
              redirect('admin/listmobil');
          }else{
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('admin/asasa');
                  }
                   
              }else{
          redirect('admin/list');
        }
        
  }
  
  function update_mobil(){
        
              $config['upload_path'] = './assets/img/car/'; //path folder
              $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
              $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

              $this->upload->initialize($config);
              if(!empty($_FILES['filefoto']['name']))
              {
                  if ($this->upload->do_upload('filefoto'))
                  {
                          $gbr = $this->upload->data();
                          //Compress Image
                          $config['image_library']='gd2';
                          $config['source_image']='./assets/img/car/'.$gbr['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '60%';
                          $config['width']= 500;
                          $config['height']= 400;
                          $config['new_image']= './assets/img/car/'.$gbr['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();

                          $gambar=$gbr['file_name'];
                          $mobil_id=$this->input->post('kode');
                          $nama=strip_tags($this->input->post('xnama'));
                          $deskripsi=strip_tags($this->input->post('xdeskripsi'));
                          $ac=strip_tags($this->input->post('xac'));
                          $bahan=strip_tags($this->input->post('xbahan'));
                          $transmisi=strip_tags($this->input->post('xtransmisi'));
              $this->m_listmobil->update_mobil($nama,$deskripsi,$bahan,$ac,$transmisi,$gambar,$mobil_id);
              echo $this->session->set_flashdata('msg','info');
              redirect('admin/listmobil');
                      
                  }else{
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('admin/listmobil');
                  }
                  
              }else{
              $mobil_id=$this->input->post('kode');
                          $nama=strip_tags($this->input->post('xnama'));
                          $deskripsi=strip_tags($this->input->post('xdeskripsi'));
                          $ac=strip_tags($this->input->post('xac'));
                          $bahan=strip_tags($this->input->post('xbahan'));
                          $transmisi=strip_tags($this->input->post('xtransmisi'));
              $this->m_listmobil->update_mobil_tanpa_gambar($nama,$deskripsi,$bahan,$ac,$transmisi,$mobil_id);
              echo $this->session->set_flashdata('msg','info');
              redirect('admin/listmobil');
              } 

  }

  function hapus_mobil(){
    $kode=$this->input->post('kode');
    $gambar=$this->input->post('gambar');
    $path='./assets/img/car/'.$gambar;
    unlink($path);
    $this->m_listmobil->hapus_mobil($kode);
    echo $this->session->set_flashdata('msg','success-hapus');
    redirect('admin/listmobil');
  }

}

/* End of file gallery.php */
/* Location: ./application/controllers/admin/gallery.php */