<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_c0re extends CI_Model
{
  private $level;
  private $access;
  private $categoryFilter;

  function __construct()
  {
    parent::__construct();
    $this->level = $this->session->userdata('level');
    $this->access = explode(",", $this->session->userdata('access'));
    $this->categoryFilter = $this->session->userdata('categoryFilter');
  }
  function _post($name , $xss = true)
  {
    return $this->input->post($name , $xss);
  }

  //Process Design
  public function checkP02Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb09apqp");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP02($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb09apqp");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP02()
  {
    $this->db->select("*");
    $this->db->from("tb09apqp");
    return $this->db->get()->result();
  }
  public function getCountP02()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tb09apqp");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP02($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tb09apqp", $data);
  }
  public function editP02($noreg)
  {
    $data = array(
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tb09apqp", $data);
  }
  public function deleteP02($noreg)
  {
    $this->db->delete("tb09apqp", array('noreg' => $noreg));
    return true;
  }
  public function datatableP02()
  {
    $array = array("noreg","datereg","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable02', $key);
    }else{
      $this->session->unset_userdata('search_datatable02');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tb09apqp.noreg, tb09apqp.datereg, tb09apqp.idcategory, tbcategory.nmcategory, tb09apqp.title, tb09apqp.period_a, tb09apqp.period_z, tb09apqp.period_s, tb09apqp.period_x, tb09apqp.period_y" ,FALSE);
    $this->db->from("tb09apqp");
    $this->db->join("tbcategory", "tb09apqp.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tb09apqp.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("datereg", "DESC");
    $this->db->order_by("noreg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP02();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(file_exists("./files/pdf/02/".$val->noreg.".pdf")){
      $btn = '<a href="'.site_url('c0re/P02_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
      }if(($this->level == 2 && in_array("02", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/P02_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/P02_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete00" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $output['data'][] = array(
        $val->noreg,
        $val->datereg,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        // $val->period_y,
        $btn
      );
    }
    return $output;
  }
  public function excelP02()
  {
    $key = $this->session->userdata('search_datatable00');
    $this->db->select("*");
    $this->db->from("tb09apqp");
    $this->db->join("tbcategory", "tb09apqp.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tb09apqp.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }

  //Material Control
  public function checkP03Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbmaterialc");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP03($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbmaterialc");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP03()
  {
    $this->db->select("*");
    $this->db->from("tbmaterialc");
    return $this->db->get()->result();
  }
  public function getCountP03()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tbmaterialc");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP03($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tbmaterialc", $data);
  }
  public function editP03($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tbmaterialc", $data);
  }
  public function deleteP03($noreg)
  {
    $this->db->delete("tbmaterialc", array('noreg' => $noreg));
    return true;
  }
  public function categoryFilterP03()
  {
    $this->db->select("tbmaterialc.idcategory, tbcategory.nmcategory");
    $this->db->from("tbmaterialc");
    $this->db->join("tbcategory", "tbmaterialc.idcategory = tbcategory.idcategory");
    $this->db->group_by("tbmaterialc.idcategory");
    return $this->db->get()->result();
  }
  public function datatableP03()
  {
    $array = array("noreg","datereg","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable03', $key);
    }else{
      $this->session->unset_userdata('search_datatable03');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tbmaterialc.noreg, tbmaterialc.datereg, tbmaterialc.idcategory, tbcategory.nmcategory, tbmaterialc.title, tbmaterialc.period_a, tbmaterialc.period_z, tbmaterialc.period_s, tbmaterialc.period_x, tbmaterialc.period_y" ,FALSE);
    $this->db->from("tbmaterialc");
    $this->db->join("tbcategory", "tbmaterialc.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tbmaterialc.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("datereg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP03();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(file_exists("./files/pdf/03/".$val->noreg.".pdf")){
      $btn = '<a href="'.site_url('c0re/p03_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
      }
      if(($this->level == 2 && in_array("03", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/p03_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/p03_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete03" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $output['data'][] = array(
        $val->noreg,
        $val->datereg,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        $btn
      );
    }
    return $output;
  }
  public function excelP03()
  {
    $key = $this->session->userdata('search_datatable03');
    $this->db->select("*");
    $this->db->from("tbmaterialc");
    $this->db->join("tbcategory", "tbmaterialc.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tbmaterialc.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }

  // Production Process
  public function checkP04Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbproprocess");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP04($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbproprocess");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP04()
  {
    $this->db->select("*");
    $this->db->from("tbproprocess");
    return $this->db->get()->result();
  }
  public function getCountP04()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tbproprocess");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP04($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tbproprocess", $data);
  }
  public function editP04($noreg)
  {
    $data = array(
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tbproprocess", $data);
  }
  public function deleteP04($noreg)
  {
    $this->db->delete("tbproprocess", array('noreg' => $noreg));
    return true;
  }
  public function datatableP04()
  {
    $array = array("noreg","datereg","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable04', $key);
    }else{
      $this->session->unset_userdata('search_datatable04');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tbproprocess.noreg, tbproprocess.datereg, tbproprocess.idcategory, tbcategory.nmcategory, tbproprocess.title, tbproprocess.period_a, tbproprocess.period_z, tbproprocess.period_s, tbproprocess.period_x, tbproprocess.period_y" ,FALSE);
    $this->db->from("tbproprocess");
    $this->db->join("tbcategory", "tbproprocess.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tbproprocess.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("datereg", "DESC");
    $this->db->order_by("noreg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP04();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(file_exists("./files/pdf/04/".$val->noreg.".pdf")){
      $btn = '<a href="'.site_url('c0re/P04_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
      }
      if(($this->level == 2 && in_array("04", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/P04_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/P04_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete04" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $output['data'][] = array(
        $val->noreg,
        $val->datereg,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        // $val->period_y,
        $btn
      );
    }
    return $output;
  }
  
  public function excelP04()
  {
    $key = $this->session->userdata('search_datatable04');
    $this->db->select("*");
    $this->db->from("tbproprocess");
    $this->db->join("tbcategory", "tbproprocess.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tbproprocess.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }
  //delivery
  public function checkp05Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbdeliv");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getp05($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbdeliv");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllp05()
  {
    $this->db->select("*");
    $this->db->from("tbdeliv");
    return $this->db->get()->result();
  }
  public function getCountp05()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tbdeliv");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addp05($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tbdeliv", $data);
  }
  public function editp05($noreg)
  {
    $data = array(
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tbdeliv", $data);
  }
  public function deletep05($noreg)
  {
    $this->db->delete("tbdeliv", array('noreg' => $noreg));
    return true;
  }
  public function datatablep05()
  {
    $array = array("noreg","datereg","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable05', $key);
    }else{
      $this->session->unset_userdata('search_datatable05');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tbdeliv.noreg, tbdeliv.datereg, tbdeliv.idcategory, tbcategory.nmcategory, tbdeliv.title, tbdeliv.period_a, tbdeliv.period_z, tbdeliv.period_s, tbdeliv.period_x, tbdeliv.period_y" ,FALSE);
    $this->db->from("tbdeliv");
    $this->db->join("tbcategory", "tbdeliv.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tbdeliv.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("datereg", "DESC");
    $this->db->order_by("noreg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountp05();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(file_exists("./files/pdf/05/".$val->noreg.".pdf")){
      $btn = '<a href="'.site_url('c0re/p05_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
      }if(($this->level == 2 && in_array("05", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/p05_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/p05_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete05" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $output['data'][] = array(
        $val->noreg,
        $val->datereg,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        // $val->period_y,
        $btn
      );
    }
    return $output;
  }
  public function excelp05()
  {
    $key = $this->session->userdata('search_datatable05');
    $this->db->select("*");
    $this->db->from("tbdeliv");
    $this->db->join("tbcategory", "tbdeliv.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tbdeliv.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }

  //Customer Complaint Handling
  public function checkP06Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb23satisfaction");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP06($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb23satisfaction");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP06()
  {
    $this->db->select("*");
    $this->db->from("tb23satisfaction");
    return $this->db->get()->result();
  }
  public function getCountP06()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tb23satisfaction");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP06($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcust' => $this->input->post('idcust'),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tb23satisfaction", $data);
  }
  public function editP06($noreg)
  {
    $data = array(
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcust' => $this->input->post('idcust'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tb23satisfaction", $data);
  }
  public function deleteP06($noreg)
  {
    $this->db->delete("tb23satisfaction", array('noreg' => $noreg));
    return true;
  }
  public function datatableP06()
  {
    $array = array("noreg","datereg","idcust","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key); 
      $this->db->or_like('datereg', $key);
      $this->db->or_like('idcust', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable06', $key);
    }else{
      $this->session->unset_userdata('search_datatable06');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tb23satisfaction.noreg, tb23satisfaction.datereg, tb23satisfaction.idcust, tb23satisfaction.idcategory, tbcategory.nmcategory, tb23satisfaction.title, tb23satisfaction.period_a, tb23satisfaction.period_z, tb23satisfaction.period_s, tb23satisfaction.period_x, tb23satisfaction.period_y" ,FALSE);
    $this->db->from("tb23satisfaction");
    $this->db->join("tbcategory", "tb23satisfaction.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tb23satisfaction.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("noreg", "DESC");
    $this->db->order_by("datereg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP06();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(($this->level == 2 && in_array("06", $this->access)) || $this->level == 1){
        if(substr($val->noreg, 0, 5) == "06004"){
          if(file_exists("./files/pdf/06/".$val->noreg.".pdf")){
            $noreg = '<a target="blank" href="'.site_url('c0re/p06_read/'.$val->noreg).'">'.$val->noreg.'</a>';
          }else{
            $noreg = $val->noreg;
          }
          $btn = '<a href="'.site_url('c0re/P06/'.$val->noreg).'" class="btn btn-success btn-xs" data-toggle="tooltip" title="Detail"><i class="fa fa-folder"></i></a> ';
          }elseif(file_exists("./files/pdf/06/".$val->noreg.".pdf")){
            $noreg = $val->noreg;
            $btn = '<a href="'.site_url('c0re/p06_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
          }else{
            $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
          }
            $btn .= '<a href="'.site_url('c0re/p06_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/p06_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete06" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }else{
        if(substr($val->noreg, 0, 5) == "06004"){
          if(file_exists("./files/pdf/06/".$val->noreg.".pdf")){
            $noreg = '<a target="blank" href="'.site_url('c0re/p06_read/'.$val->noreg).'">'.$val->noreg.'</a>';
          }else{
            $noreg = $val->noreg;
          }
          $btn = '<a href="'.site_url('c0re/P06/'.$val->noreg).'" class="btn btn-success btn-xs" data-toggle="tooltip" title="Detail"><i class="fa fa-folder"></i></a>';
        }elseif(file_exists("./files/pdf/06/".$val->noreg.".pdf")){
            $noreg = $val->noreg;
            $btn = '<a href="'.site_url('c0re/p06_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
          }else{
            $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
          }
      }

      $output['data'][] = array(
        $val->noreg,
        $val->datereg,
        $val->idcust,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        $btn
      );
    }
    return $output;
  }
  public function excelP06()
  {
    $key = $this->session->userdata('search_datatable06');
    $this->db->select("*");
    $this->db->from("tb23satisfaction");
    $this->db->join("tbcategory", "tb23satisfaction.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tb23satisfaction.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }
  //061
  public function checkP061Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb07claim");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP061($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb07claim");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP061()
  {
    $this->db->select("*");
    $this->db->from("tb07claim");
    return $this->db->get()->result();
  }
  public function getCountP061()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tb07claim");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP061($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'nolog' => $this->input->post('nolog'),
      'dateclaim' => date("Y-m-d", strtotime($this->input->post('dateclaim'))),
      'idcust' => $this->input->post('idcust'),
      'model' => $this->input->post('model'),
      'ncclaim' => $this->input->post('ncclaim'),
      'qty' => $this->input->post('qty'),
      'daterequest' => date("Y-m-d", strtotime($this->input->post('daterequest'))),
      'datereply' => date("Y-m-d", strtotime($this->input->post('datereply'))),
      'judge' => $this->input->post('judge'),
      'status' => $this->input->post('status')
    );
    return $this->db->insert("tb07claim", $data);
  }
  public function editP061($noreg)
  {
    $data = array(
      'nolog' => $this->input->post('nolog'),
      'dateclaim' => date("Y-m-d", strtotime($this->input->post('dateclaim'))),
      'idcust' => $this->input->post('idcust'),
      'model' => $this->input->post('model'),
      'ncclaim' => $this->input->post('ncclaim'),
      'qty' => $this->input->post('qty'),
      'daterequest' => date("Y-m-d", strtotime($this->input->post('daterequest'))),
      'datereply' => date("Y-m-d", strtotime($this->input->post('datereply'))),
      'judge' => $this->input->post('judge'),
      'status' => $this->input->post('status')
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tb07claim", $data);
  }
  public function deleteP061($noreg)
  {
    $this->db->delete("tb07claim", array('noreg' => $noreg));
    return true;
  }
  public function datatableP061()
  {
    $array = array("noreg","nolog","dateclaim","idcust","model","ncclaim","qty","daterequest","datereply","judge","status");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('noreg', $key);
      $this->db->or_like('nolog', $key);
      $this->db->or_like('dateclaim', $key);
      $this->db->or_like('idcust', $key);
      $this->db->or_like('model', $key);
      $this->db->or_like('ncclaim', $key);
      $this->db->or_like('qty', $key);
      $this->db->or_like('daterequest', $key);
      $this->db->or_like('datereply', $key);
      $this->db->or_like('judge', $key);
      $this->db->or_like('status', $key);
      $this->session->set_userdata('search_datatable061', $key);
    }else{
      $this->session->unset_userdata('search_datatable061');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb07claim");
    $this->db->order_by("dateclaim", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP061();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(file_exists("./files/pdf/061/".$val->noreg.".pdf")){
      $btn = '<a href="'.site_url('c0re/P061_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
      }
      if(($this->level == 2 && in_array("06", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/P061_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/P061_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete061" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $nolog = $val->nolog;
      $daterequest = $val->daterequest;
      $datereply = $val->datereply;
      if($nolog == ""){ $nolog = "-"; }
      if($daterequest == "1970-01-01"){ $daterequest = "-"; }
      if($datereply == "1970-01-01"){ $datereply = "-"; }

      $output['data'][] = array(
        $val->noreg,
        $nolog,
        $val->dateclaim,
        $val->idcust,
        $val->model,
        $val->ncclaim,
        $val->qty,
        $daterequest,
        $datereply,
        $val->judge,
        $val->status,
        $btn
      );
    }
    return $output;
  }
  public function excelP061()
  {
    $key = $this->session->userdata('search_datatable061');
    $this->db->select("*");
    $this->db->from("tb07claim");
    if($key != null){
      $this->db->or_like('nolog', $key);
      $this->db->or_like('dateclaim', $key);
      $this->db->or_like('idcust', $key);
      $this->db->or_like('model', $key);
      $this->db->or_like('ncclaim', $key);
      $this->db->or_like('qty', $key);
      $this->db->or_like('daterequest', $key);
      $this->db->or_like('datereply', $key);
      $this->db->or_like('judge', $key);
      $this->db->or_like('status', $key);
    }
    return $this->db->get()->result();
  }

  //NC
  public function checkP07Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbcontrolnc");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP07($noreg)
  {
    $this->db->select("*");
    $this->db->from("tbcontrolnc");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP07()
  {
    $this->db->select("*");
    $this->db->from("tbcontrolnc");
    return $this->db->get()->result();
  }
  public function getCountP07()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tbcontrolnc");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP07($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'idcategory' => $this->input->post('idcategory'),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    return $this->db->insert("tbcontrolnc", $data);
  }
  public function editP07($noreg)
  {
    $data = array(
      'datereg' => date("Y-m-d", strtotime($this->input->post('datereg'))),
      'title' => $this->input->post('title'),
      'period_a' => $this->input->post('month_a')."-".$this->input->post('year_a'),
      'period_z' => $this->input->post('month_z')."-".$this->input->post('year_z'),
      'period_s' => $this->input->post('month_s')."-".$this->input->post('year_s'),
      'period_x' => $this->input->post('month_x')."-".$this->input->post('year_x'),
      'period_y' => $this->input->post('month_y')."-".$this->input->post('year_y'),
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tbcontrolnc", $data);
  }
  public function deleteP07($noreg)
  {
    $this->db->delete("tbcontrolnc", array('noreg' => $noreg));
    return true;
  }
  public function datatableP07()
  {
    $array = array("noreg","datereg","idcategory","title","period_a","period_z","period_s","period_x","period_y");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
      $this->session->set_userdata('search_datatable07', $key);
    }else{
      $this->session->unset_userdata('search_datatable07');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS tbcontrolnc.noreg, tbcontrolnc.datereg, tbcontrolnc.idcategory, tbcategory.nmcategory, tbcontrolnc.title, tbcontrolnc.period_a, tbcontrolnc.period_z, tbcontrolnc.period_s, tbcontrolnc.period_x, tbcontrolnc.period_y" ,FALSE);
    $this->db->from("tbcontrolnc");
    $this->db->join("tbcategory", "tbcontrolnc.idcategory = tbcategory.idcategory");
    if(isset($this->categoryFilter)){
      $this->db->where("tbcontrolnc.idcategory", $this->categoryFilter);
    }
    $this->db->order_by("datereg", "DESC");
    $this->db->order_by("noreg", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP07();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if(($this->level == 2 && in_array("07", $this->access)) || $this->level == 1){
        if(substr($val->noreg, 0, 5) == "07001"){
          if(file_exists("./files/pdf/07/".$val->noreg.".pdf")){
            $noreg = '<a target="blank" href="'.site_url('c0re/p07_read/'.$val->noreg).'">'.$val->noreg.'</a>';
          }else{
            $noreg = $val->noreg;
          }
          $btn = '<a href="'.site_url('c0re/p07_lami/'.$val->noreg).'" class="btn btn-success btn-xs" data-toggle="tooltip" title="Detail"><i class="fa fa-folder"></i></a> ';
          }elseif(file_exists("./files/pdf/07/".$val->noreg.".pdf")){
            $noreg = $val->noreg;
            $btn = '<a href="'.site_url('c0re/P07_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
          }else{
            $btn = '<div class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></div> ';
          }
            $btn .= '<a href="'.site_url('c0re/P07_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a  href="#" data-url="'.site_url('c0re/P07_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete07" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }else{
        if(substr($val->noreg, 0, 5) == "07001"){
          if(file_exists("./files/pdf/07/".$val->noreg.".pdf")){
            $noreg = '<a target="blank" href="'.site_url('c0re/P07_read/'.$val->noreg).'">'.$val->noreg.'</a>';
          }else{
            $noreg = $val->noreg;
          }
          $btn = '<a href="'.site_url('c0re/P07_lami/'.$val->noreg).'" class="btn btn-success btn-xs" data-toggle="tooltip" title="Detail"><i class="fa fa-folder"></i></a>';
        }else{
          $noreg = $val->noreg;
          $btn = '<a href="'.site_url('c0re/P07_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>';
        }
      }

      $output['data'][] = array(
        $noreg,
        $val->datereg,
        $val->nmcategory,
        $val->title,
        $val->period_a,
        $val->period_z,
        $val->period_s,
        $val->period_x,
        $btn
      );
    }
    return $output;
  }
  public function excelP07()
  {
    $key = $this->session->userdata('search_datatable07');
    $this->db->select("*");
    $this->db->from("tbcontrolnc");
    $this->db->join("tbcategory", "tbcontrolnc.idcategory = tbcategory.idcategory");
    if($key != null){
      $this->db->group_start();
      $this->db->like('noreg', $key);
      $this->db->or_like('datereg', $key);
      $this->db->or_like('nmcategory', $key);
      $this->db->or_like('title', $key);
      $this->db->or_like('period_a', $key);
      $this->db->or_like('period_z', $key);
      $this->db->or_like('period_s', $key);
      $this->db->or_like('period_x', $key);
      $this->db->or_like('period_y', $key);
      $this->db->group_end();
    }
    if(isset($this->categoryFilter)){
      $this->db->where("tbcontrolnc.idcategory", $this->categoryFilter);
    }
    return $this->db->get()->result();
  }

  //Control of NC Product
  public function checkP071Noreg($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb08controlnc");
    $this->db->like("noreg", $noreg, "after");
    return $this->db->get()->result();
  }
  public function getP071($noreg)
  {
    $this->db->select("*");
    $this->db->from("tb08controlnc");
    $this->db->where("noreg", $noreg);
    return $this->db->get()->row();
  }
  public function getAllP071()
  {
    $this->db->select("*");
    $this->db->from("tb08controlnc");
    return $this->db->get()->result();
  }
  public function getCountP071()
  {
    $this->db->select("count(noreg) as total");
    $this->db->from("tb08controlnc");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addP071($noreg)
  {
    $data = array(
      'noreg' => $noreg,
      'noftkp' => $this->input->post('noftkp'),
      'datefine' => date("Y-m-d", strtotime($this->input->post('datefine'))),
      'classification' => $this->input->post('classification'),
      'rank' => $this->input->post('rank'),
      'model' => $this->input->post('model'),
      'defect' => $this->input->post('defect'),
      'qty' => $this->input->post('qty'),
      'standard' => $this->input->post('standard'),
      'actual' => $this->input->post('actual'),
      'line' => $this->input->post('line'),
      'mold' => $this->input->post('mold'),
      'stamp' => $this->input->post('stamp'),
      'causedept' => $this->input->post('causedept'),
      'causeshift' => $this->input->post('causeshift'),
      'causegroup' => $this->input->post('causegroup'),
      'finddept' => $this->input->post('finddept'),
      'findshift' => $this->input->post('findshift'),
      'findgroup' => $this->input->post('findgroup'),
      'remark' => $this->input->post('remark')
    );
    return $this->db->insert("tb08controlnc", $data);
  }
  public function editP071($noreg)
  {
    $data = array(
      'noftkp' => $this->input->post('noftkp'),
      'datefine' => date("Y-m-d", strtotime($this->input->post('datefine'))),
      'classification' => $this->input->post('classification'),
      'rank' => $this->input->post('rank'),
      'model' => $this->input->post('model'),
      'defect' => $this->input->post('defect'),
      'qty' => $this->input->post('qty'),
      'standard' => $this->input->post('standard'),
      'actual' => $this->input->post('actual'),
      'line' => $this->input->post('line'),
      'mold' => $this->input->post('mold'),
      'stamp' => $this->input->post('stamp'),
      'causedept' => $this->input->post('causedept'),
      'causeshift' => $this->input->post('causeshift'),
      'causegroup' => $this->input->post('causegroup'),
      'finddept' => $this->input->post('finddept'),
      'findshift' => $this->input->post('findshift'),
      'findgroup' => $this->input->post('findgroup'),
      'remark' => $this->input->post('remark')
    );
    $this->db->where('noreg', $noreg);
    return $this->db->update("tb08controlnc", $data);
  }
  public function deleteP071($noreg)
  {
    $this->db->delete("tb08controlnc", array('noreg' => $noreg));
    return true;
  }
  public function datatableP071()
  {
    $array = array("noreg","noftkp","datefine","rank","model","defect","qty","causedept");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('noreg', $key);
      $this->db->or_like('noftkp', $key);
      $this->db->or_like('datefine', $key);
      $this->db->or_like('rank', $key);
      $this->db->or_like('model', $key);
      $this->db->or_like('defect', $key);
      $this->db->or_like('qty', $key);
      $this->db->or_like('causedept', $key);
      $this->session->set_userdata('search_datatable071', $key);
    }else{
      $this->session->unset_userdata('search_datatable071');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS noreg, noftkp, datefine, rank, model, defect, qty, causedept" ,FALSE);
    $this->db->from("tb08controlnc");
    $fiscal = $this->session->userdata('fiscal071');
    if($fiscal !== null){
      $fiscal1 = $fiscal;
      $fiscal2 = $fiscal + 1;
      $this->db->where("datefine BETWEEN '$fiscal1-04-01' AND '$fiscal2-03-31'");
    }
    $this->db->order_by("datefine", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountP071();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      $noftkp = $val->noftkp;
      if($noftkp == ""){ $noftkp = "-"; }

      if(file_exists("./files/pdf/071/".$val->noreg.".pdf")){
        $btn = '<a href="'.site_url('c0re/p071_read/'.$val->noreg).'" target="blank" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a> ';
      }else{
        $btn = '<a href="#" class="btn btn-primary btn-xs disabled"><i class="fa fa-eye-slash"></i></a> ';
      }
      $btn .= '<a href="'.site_url('c0re/p071_detail/'.$val->noreg).'" class="btn btn-success btn-xs" data-toggle="tooltip" title="More"><i class="fa fa-list"></i></a> ';
      if(($this->level == 2 && in_array("07", $this->access)) || $this->level == 1){
        $btn .= '<a href="'.site_url('c0re/p071_edit/'.$val->noreg).'" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a href="#" data-url="'.site_url('c0re/p071_delete/'.$val->noreg).'" class="btn btn-danger btn-xs btn-delete071" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }

      $output['data'][] = array(
        $val->noreg,
        $noftkp,
        $val->datefine,
        $val->rank,
        $val->model,
        $val->defect,
        $val->qty,
        $val->causedept,
        $btn
      );
    }
    return $output;
  }
  public function excelP071()
  {
    $key = $this->session->userdata('search_datatable071');
    $this->db->select("*");
    $this->db->from("tb08controlnc");
    if($key != null){
      $this->db->like('noftkp', $key);
      $this->db->or_like('datefine', $key);
      $this->db->or_like('rank', $key);
      $this->db->or_like('model', $key);
      $this->db->or_like('defect', $key);
      $this->db->or_like('qty', $key);
      $this->db->or_like('causedept', $key);
    }
    $fiscal = $this->session->userdata('fiscal071');
    if($fiscal !== null){
      $fiscal1 = $fiscal;
      $fiscal2 = $fiscal + 1;
      $this->db->where("datefine BETWEEN '$fiscal1-04-01' AND '$fiscal2-03-31'");
    }
    return $this->db->get()->result();
  }
}
