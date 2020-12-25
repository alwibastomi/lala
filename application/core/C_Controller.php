<!-- LICENCE
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller
{
  protected $isLogin = false;
  private $level;
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url','form');
    $this->load->library(array('form_validation','Excel'));
    $this->load->model(array('m_user', 'm_arsip', 'm_unit'));
    $this->isLogin = $this->session->userdata('isLogin');
$this->level = 1;
  }
  public function renderpage($view, $datas = array())
  {
    $data['id_petugas'] = $this->session->userdata('id_petugas');
    $data['nick'] = $this->session->userdata('nick');
    $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
    $data['unit'] = $this->m_user->unit();
    $data['posisi'] = $this->session->userdata('posisi');

    // $data['iddept'] = $this->session->userdata('iddept');
    $data['gender'] = $this->session->userdata('gender');
    $data['level'] = $this->session->userdata('level');
    // $data['access'] = explode(",", $this->session->userdata('access'));
    $data['photo'] = $this->session->userdata('photo');
    // $datas['categoryFilter'] = $this->session->userdata('categoryFilter');

    $this->load->view('admin/head', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/header', $data);
    $this->load->view($view, $datas);
    $this->load->view('admin/footer', $data);
  }
  public function upload_file($filename, $path)
  {
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'pdf';
    $config['file_name']  = $filename;
    $this->load->library('upload');
    $this->upload->initialize($config);
    $data = array();

    if ($this->upload->do_upload('file')){
     $updata = $this->upload->data();
     return true;
   }else{
     $this->upload->display_errors();
     return false;
   }
 }
 public function upload_images($filename, $path, $name)
 {
  $config['upload_path'] = $path;
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['file_name']  = $filename;
  $config['overwrite'] = true;
  $this->load->library('upload');
  $this->upload->initialize($config);
  $data = array();

  if ($this->upload->do_upload($name)){
   $updata = $this->upload->data();
   return true;
 }else{
   $this->upload->display_errors();
   return false;
 }
}
public function nmuser()
{
  $nmuser = $this->session->userdata('nmuser');
  $cut = explode(" ",$nmuser);
  $new_nmuser = array();
  foreach ($cut as $val) {
    $ucfirst = ucfirst(strtolower($val));
    $new_nmuser[] = $ucfirst;
  }
  $join = implode(" ", $new_nmuser);
  return $join;
}
public function get_browser_name($user_agent)
{
  if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
  elseif (strpos($user_agent, 'Edge')) return 'Edge';
  elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
  elseif (strpos($user_agent, 'Safari')) return 'Safari';
  elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
  elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

  return 'Other';
}
}
