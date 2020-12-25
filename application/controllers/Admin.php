<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Core
{
  private $level;
  function __construct()
  {
    parent::__construct();
    $this->level = 1;
  }
  public function index()
  {
    if($this->isLogin){
      redirect('admin/home');
      die();
    }
    $this->form_validation->set_rules('nick', 'Nick', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == false){
      $data['alert'] = '';
      $this->load->view('admin/pages/login', $data);
    }else{
      if($this->m_user->doLogin()){
        $this->m_arsip->retensi();
        // $this->m_user->online($this->session->userdata('level'));
        redirect('admin');
      }
    }
  }
  public function guest_login()
  {
    $data = array(
      'isLogin' => true,
      'iduser' => 'guest',
      'nmuser' => 'Guest'
    );
    $this->session->set_userdata($data);
    redirect('admin');
  }
  public function logout()
  {
    $this->m_user->doLogout();
    redirect('admin');
  }
  public function addfile()
  {

    $path = "./files";
    $config['upload_path'] = $path;
    $config['allowed_types'] = 'xlsx';
    $config['file_name']  = "dsfsdf";
    $this->load->library('upload', $config);


    if ($this->upload->do_upload('file')){
      $updata = $this->upload->data();
      echo $updata;
    }else{
      $error = $this->upload->display_errors();
      print_r($error);

    }
  }

  public function home()
  {
    if($this->isLogin){


      $backupfile = $this->input->post('dirfile');
      if($backupfile != ""){
        $this->file_backup($backupfile);
        //echo "<script>alert('$backupfile');</script>";
        $data['alert'] = "success_backup";
      }else{
        $data['alert'] = "";
      }
      $this->renderpage('admin/pages/home', $data);
    }else{
      redirect('admin');
    }
  }
  public function db_backup()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1){
      date_default_timezone_set("Asia/Jakarta");
      $this->load->dbutil();

      $prefs = array(
        'format'      => 'zip',
        'filename'    => 'db_spas_um.sql'
      );

      $backup =& $this->dbutil->backup($prefs);

      $db_name = 'backup-on-'. date("Y-m-d-H:i:s") .'.zip';
      $save = 'C:\\'.$db_name;

      $this->load->helper('file');
      write_file($save, $backup);

      $this->load->helper('download');
      force_download($db_name, $backup);
    }else{
      redirect('admin');
    }
  }
  public function file_backup($destination)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $source = 'C:\xampp\htdocs\spas_um';
    $destination = $destination."\\";
    set_time_limit(10000);
    system("xcopy $source $destination /e /q /j");
  }
}
