<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  public function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }
  public function doLogin()
  {
    $nick = $this->input->post('nick');
    $password = $this->input->post('password');

    $this->db->select("*");
    $this->db->from("tb_petugas");
    $this->db->where("nick", $nick);
    $query = $this->db->get()->row();
    if($query != null){
      if($this->_hash_equals($password, $query->password)){
        $data = array(
          'isLogin' => true,
          'id_petugas' => $query->id_petugas,
          'nick' => $query->nick,
          'nama_lengkap' => $query->nama_lengkap,
          'posisi' => $query->posisi,
          'photo' => $query->photo,
          'unit' => $query->unit,
          'level' => $query->level
        );
        $this->session->set_userdata($data);
        return true;
      }else{
        return false;
      }
    }
  }
  function doLogout()
  {
    // $this->Offline($this->session->userdata('id_petugas'));
    $this->session->sess_destroy();
    return true;
  }
  public function getUser($id_petugas)
  {
    $this->db->select("*");
    $this->db->from("tb_petugas");
    $this->db->where("id_petugas", $id_petugas);
    return $this->db->get()->row();
  }
  public function getAllUser()
  {
    $this->db->select("id_petugas, nick, nama_lengkap, photo, unit");
    $this->db->from("tb_petugas");
    return $this->db->get()->result();
  }
  public function getCountUser()
  {
    $this->db->select("count(id_petugas) as total");
    $this->db->from("tb_petugas");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function usernameCheck($nick)
  {
    $this->db->select("nick");
    $this->db->from("tb_petugas");
    $this->db->where("nick", $nick);
    return $this->db->get()->row();
  }
  public function addUser()
  {
    $nick = $this->input->post('username');
    $password = $this->input->post('password');
    $nama_lengkap = $this->input->post('fname');
    $gender = $this->input->post('gender');
    $posisi = $this->input->post('posisi');
    $unit = $this->input->post('unit');
    $hash = $this->_crypt($password);
    $level = $this->input->post('level');
    if(!$this->usernameCheck($nick)){
      $data = array(
        'nick' => $nick,
        'nama_lengkap' => $nama_lengkap,
        'posisi' => $posisi,
        'unit' => $unit,
        'gender' => $gender,
        'password' => $hash,
        'level' => $level
      );
      $this->db->insert("tb_petugas", $data);
      return "success";
    }else{
      return "username_exist";
    }
  }
  public function editUser($id_petugas)
  {

    $nick = $this->input->post('username');
    $nama_lengkap = $this->input->post('fname');
    $gender = $this->input->post('gender');
    $posisi = $this->input->post('posisi');
    $unit = $this->input->post('unit');
    $level = $this->input->post('level');
      $data = array(
        'nick' => $nick,
        'nama_lengkap' => $nama_lengkap,
        'posisi' => $posisi,
        'unit' => $unit,
        'gender' => $gender,
        'level' => $level
      );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function Online($id_petugas)
  { 
    $data = array(
      'online' => "ys"
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function Offline($id_petugas)
  { 
    $data = array(
      'online' => "no"
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function deleteUser($id)
  {
    $this->db->delete("tb_petugas", array('id_petugas' => $id));
    return true;
  }
  public function changePhoto($id_petugas)
  {
    $photo = $_FILES['photo']['name'];
    $cut = explode(" ", $photo);
    $new = implode("_", $cut);
    $this->session->set_userdata('photo', $new);
    $data = array(
      'photo' => $new,
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function changeName($id_petugas)
  {
    $data = array(
      'nama_lengkap' => $this->input->post('newnm')
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function changeUsername($id_petugas)
  {
    $data = array(
      'nick' => $this->input->post('newunm')
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function changeEmail($id_petugas)
  {
    $data = array(
      'unit' => $this->input->post('newm')
    );
    $this->db->where('id_petugas', $id_petugas);
    return $this->db->update("tb_petugas", $data);
  }
  public function changePassword($id_petugas)
  {
    $currentpass = $this->input->post('currentpass');
    $newpass = $this->input->post('newpass');
    $confirmpass = $this->input->post('confirmpass');
    $user = $this->getUser($id_petugas);
    if($this->_hash_equals($currentpass, $user->password)){
      if($newpass == $confirmpass){
        date_default_timezone_set("Asia/Jakarta");
        $newpassword = $this->_crypt($newpass);
        $lc = date("Y-m-d H:i:s");
        $data = array(
          'password' => $newpassword,
          'lc' => $lc
        );
        $this->db->where('id_petugas', $id_petugas);
        $this->db->update("tb_petugas", $data);
        return "ok";
        die();
      }else{
        return "not match";
        die();
      }
    }else{
      return "wrong";
      die();
    }
  }

  public function unit()
  {
    $this->db->select('tb_petugas.id_petugas, tb_petugas.nama_lengkap, tb_unit.nama');
    $this->db->from('tb_petugas, tb_unit');
    $this->db->where('tb_petugas.id_petugas = tb_unit.id');
    return $this->db->get()->row();
  }

  public function datatableUser()
  {
    $array = array("nmuser","username","email","iddept","gender","level");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('nick', $key);
      $this->db->or_like('nama_lengkap', $key);
      $this->db->or_like('posisi', $key);
      $this->db->or_like('unit', $key);
      $this->db->or_like('gender', $key);
      $this->db->or_like('level', $key);
      $this->session->set_userdata('search_datatableusr', $key);
    }else{
      $this->session->unset_userdata('search_datatableusr');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS id_petugas, nick, nama_lengkap, gender, posisi, photo, unit" ,FALSE);
    $this->db->from("tb_petugas");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountUser();
    $getUnit = $this->unit();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      $gen = $val->gender;
      if($gen == 1){
        $gen = "Laki-Laki";
      }else{
        $gen = "Perempuan";
      }
      $btn = "";
      if($this->level == 1){
        $btn = '<a href="'.site_url('user/user_edit/'.$val->id_petugas).'" data-url="'.site_url('user/user_edit/'.$val->id_petugas).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a> ';
        if($this->session->userdata('id_petugas') != $val->id_petugas){
          $btn .= '<a  href="#" data-url="'.site_url('user/user_delete/'.$val->id_petugas).'" class="btn btn-danger btn-xs btn-deleteuser" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
        }else{
          $btn .= '<div class="btn btn-success btn-xs" data-toggle="tooltip" title="Online"><i class="fa fa-circle"></i></div>';
        }
      }

      $output['data'][] = array(
        $val->nick,
        $val->nama_lengkap,
        $gen,
        $val->posisi,
        $val->photo,
        $btn
      );
    }
    return $output;
  }
  public function excelUser()
  {
    $key = $this->session->userdata('search_datatableusr');
    $this->db->select("id_petugas, nama_lengkap, nick, posisi, unit, gender, level");
    $this->db->from("tb_petugas");
    if($key != null){
      $this->db->like('nama_lengkap', $key);
      $this->db->or_like('nick', $key);
      $this->db->or_like('posisi', $key);
      $this->db->or_like('unit', $key);
      $this->db->or_like('gender', $key);
      $this->db->or_like('level', $key);
    }
    return $this->db->get()->result();
  }
  public function _crypt($password)
  {
    return crypt($password, '$2a$07$qiAs72yuqQwoeKasdSbCakuw83koa82mbaWlaZzAypD$');
  }
  public function _hash_equals($password, $hash)
  {
    if(hash_equals($hash, crypt($password, $hash))){
      return true;
    }else{
      return false;
    }
  }
  // public function passwordHash($password)
  // {
  //   $options = [
  //     'cost' => 11,
  //     'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)
  //   ];
  //   return password_hash($password, PASSWORD_BCRYPT, $options);
  // }
  // public function passwordVerify($password, $hash)
  // {
  //   if(password_verify($password, $hash))
  //   {
  //     return true;
  //   }else{
  //     return false;
  //   }
  // }
}
