<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_arsip extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  public function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  // public function addFileajax()
  // {
  //   $id = $this->input->post('id');
  //   $file =$_FILES["file"]["name"];

  //   $where = array('id' => $id);
  //   $data = array(
  //     'file' => $file
  //   );
  //   $this->db->where($where);
  //   $this->db->update("tb_arsip", $data);
  //   return "success";
  // }
  // 
  public function file()
  {
    $id = $this->input->post('id');
    $file =$_FILES["file"]["name"];
    
    $where = array('id' => $id);
    $data = array(
      'file' => $file
    );
    $this->db->where($where);
    $this->db->update("tb_arsip", $data);
    return "success";
  }
  public function ambil_kode($table, $where)
  {
    return $this->db->get_where($table, $where);
  }
  public function getArsip($id)
  {
    $this->db->select("*");
    $this->db->from("tb_arsip");
    $this->db->where("id", $id);
    return $this->db->get()->row();
  }
    public function ambilarsip($id)
  {
    $this->db->select("darikepada as total");
    $this->db->from("tb_arsip");
    $this->db->where("id", $id);   
     $q = $this->db->get()->row();
    return $q->total;
  }
  public function getAllArsip()
  {
    $this->db->select("*");
    $this->db->from("tb_arsip");
    return $this->db->get()->result();
  }
  public function getAllC()
  {
    $this->db->select("COUNT(id) as id, unit as unit");
    $this->db->from("tb_arsip");
    $this->db->group_by('unit');
    return $this->db->get()->result();
  }
  public function getAllMK()
  {
    $this->db->select("COUNT(id) as id, jenissurat as jenissurat");
    $this->db->from("tb_arsip");
    $this->db->group_by('jenissurat');
    return $this->db->get()->result();
  }
  public function getAllArsiparis()
  {
    $this->db->select("COUNT(id) as id, arsiparis as arsiparis");
    $this->db->from("tb_arsip");
    $this->db->group_by('arsiparis');
    return $this->db->get()->result();
  }
  public function getAllPeminjam()
  {
    $this->db->select("COUNT(id) as id, Month(tanggal_pinjam) as bulan");
    $this->db->from("tb_pinjam");
    $this->db->group_by('Month(tanggal_pinjam)');
    return $this->db->get()->result();
  }
  public function getAllPeminjaman()
  {
    $this->db->select("*");
    $this->db->from("tb_pinjam");
    return $this->db->get()->result();
  }
  public function getCountPeminjaman()
  {
    $this->db->select("count(id) as total");
    $this->db->from("tb_pinjam");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function getCountArsip()
  {
    $this->db->select("count(id) as total");
    $this->db->from("tb_arsip");
    $q = $this->db->get()->row();
    return $q->total;
  }
  public function addArsip()
  {
    $diterima = date("Y-m-d");
    $dari = $this->input->post('dari');
    $indeks = $this->input->post('indeks');
    $alamatsurat = $this->input->post('alamatsurat');
    $kota = $this->input->post('kota');
    $nomorsurat = $this->input->post('nomorsurat');
    $tglsurat = $this->input->post('tglsurat');
    $jenissurat = $this->input->post('jenissurat');
    $perihal = $this->input->post('perihal');
    $isiringkas = $this->input->post('isiringkas');
    $unit = $this->input->post('unit');
    $sistem = $this->input->post('sistem');
    $kode = $this->input->post('kode');
    $klasifikasi = $this->input->post('klasifikasi');
    $file = $_FILES["file"]["name"];
    $arsiparis = $this->input->post('arsiparis');
    $aktif = $this->input->post('aktif');
    $lampiran = $this->input->post('lampiran');
    $catatan = $this->input->post('catatan');
    
    $data = array(
      'indeks' => $indeks,
      'darikepada' => $dari,
      'alamatsurat' => $alamatsurat,
      'kota' => $kota,
      'nomorsurat' => $nomorsurat,
      'tanggalsurat' => $tglsurat,
      'perihal' => $perihal,
      'isiringkas' => $isiringkas,
      'jenissurat' => $jenissurat,
      'diterima' => $diterima,
      'unit' => $unit,
      'sistem' => $sistem,
      'kode' => $kode,
      'file' => $file,
      'catatan' => $catatan,
      'klasifikasi' => $klasifikasi,
      'arsiparis' => $arsiparis,
      'aktif' => $aktif,
      'lampiran' => $lampiran,
      'dipinjam' => "tidak"
    );
    $this->db->insert("tb_arsip", $data);
    return "success";
  }

  public function add_arsipajax()
  {
    $indeks = $this->input->post('indeks');
    $dari = $this->input->post('dari');
    $alamatsurat = $this->input->post('alamatsurat');
    $kota = $this->input->post('kota');
    $nomorsurat = $this->input->post('nomorsurat');
    $tglsurat = $this->input->post('tglsurat');
    $perihal = $this->input->post('perihal');
    $isiringkas = $this->input->post('isiringkas');
    $jenissurat = $this->input->post('jenissurat');
    $diterima = date("Y-m-d");
    $unit = $this->input->post('unit');
    $sistem = $this->input->post('sistem');
    $file = $this->input->post('file');
    $kode = $this->input->post('kode');
    $catatan = $this->input->post('catatan');
    $klasifikasi = $this->input->post('klasifikasi');
    $arsiparis = $this->input->post('arsiparis');
    $aktif = $this->input->post('aktif');
    $lampiran = $this->input->post('lampiran');
    $dipinjam = "tidak";

    $data = array(
      'indeks' => $indeks,
      'darikepada' => $dari,
      'alamatsurat' => $alamatsurat,
      'kota' => $kota,
      'nomorsurat' => $nomorsurat,
      'tanggalsurat' => $tglsurat,
      'perihal' => $perihal,
      'isiringkas' => $isiringkas,
      'jenissurat' => $jenissurat,
      'diterima' => $diterima,
      'unit' => $unit,
      'sistem' => $sistem,
      'kode' => $kode,
      'file' => $file,
      'catatan' => $catatan,
      'klasifikasi' => $klasifikasi,
      'arsiparis' => $arsiparis,
      'aktif' => $aktif,
      'lampiran' => $lampiran,
      'dipinjam' => $dipinjam
    );
    $this->db->insert('tb_arsip', $data);
    return "success";
  }

  public function edit_arsipajax()
  {
    $id = $this->input->post('id');
    $indeks = $this->input->post('indeks');
    $dari = $this->input->post('dari');
    $alamatsurat = $this->input->post('alamatsurat');
    $kota = $this->input->post('kota');
    $nomorsurat = $this->input->post('nomorsurat');
    $tglsurat = $this->input->post('tglsurat');
    $perihal = $this->input->post('perihal');
    $isiringkas = $this->input->post('isiringkas');
    $jenissurat = $this->input->post('jenissurat');
    $diterima = date("Y-m-d");
    $unit = $this->input->post('unit');
    $sistem = $this->input->post('sistem');
    $file = $this->input->post('file');
    $kode = $this->input->post('kode');
    $catatan = $this->input->post('catatan');
    $klasifikasi = $this->input->post('klasifikasi');
    $arsiparis = $this->input->post('arsiparis');
    $aktif = $this->input->post('aktif');
    $lampiran = $this->input->post('lampiran');

    $where = array('id' => $id);

    $data = array(
      'id' => $id,
      'indeks' => $indeks,
      'darikepada' => $dari,
      'alamatsurat' => $alamatsurat,
      'kota' => $kota,
      'nomorsurat' => $nomorsurat,
      'tanggalsurat' => $tglsurat,
      'perihal' => $perihal,
      'isiringkas' => $isiringkas,
      'jenissurat' => $jenissurat,
      'diterima' => $diterima,
      'unit' => $unit,
      'sistem' => $sistem,
      'kode' => $kode,
      'file' => $file,
      'catatan' => $catatan,
      'klasifikasi' => $klasifikasi,
      'arsiparis' => $arsiparis,
      'aktif' => $aktif,
      'lampiran' => $lampiran
    );
    $this->db->where($where);
    $this->db->update('tb_arsip', $data);
  }

  public function pinjamArsip()
  {
    $data = array(
      'arsip' => $this->input->post('id'),
      'nama_peminjam' => $this->input->post('namapeminjam'),
      'unit' => $this->input->post('unit'),
      'kondisi_pinjam' => $this->input->post('kondisi'),
      'tanggal_pinjam' => date("Y-m-d"),
      'batas_waktu' => $this->input->post('bataswaktu'),
      'tanggal_kembali' => "0000-00-00",
      'kondisi_kembali' => "-",
      'petugas' => $this->input->post('petugas'),
      'catatan' => "-"
    );
    $this->db->insert("tb_pinjam", $data);
    return "success";
  }

  public function kembaliArsip()
  {
    $id = $this->input->post('id');

    $data = array(
      'arsip' => $this->input->post('id'),
      'tanggal_kembali' => date('Y-m-d'),
      'kondisi_kembali' => $this->input->post('kondisi_kembali'),
    );

    $eek = array('arsip' => $id, 'tanggal_kembali' => '0000-00-00');
    $this->db->where($eek);
    $this->db->update("tb_pinjam", $data);
    return "success";
  }
  public function updatedipinjam()
  {
    $id = $this->input->post('id');

    $data = array(
      'dipinjam' =>"tidak",
    );

    $eek = array('id' => $id);
    $this->db->where($eek);
    $this->db->update("tb_arsip", $data);
    return "success";
  }
  public function dipinjamiya()
  {
    $id = $this->input->post('id');

    $data = array(
      'dipinjam' =>"iya",
    );

    $eek = array('id' => $id);
    $this->db->where($eek);
    $this->db->update("tb_arsip", $data);
    return "success";
  }
  public function deletearsip($id)
  {
    $this->db->delete("tb_arsip", array('id' => $id));
    return true;
  }
    public function deletepinjamarsip($id)
  {
    $this->db->delete("tb_pinjam", array('arsip' => $id));
    return true;
  }
  public function retensi()
  {
    $ah = date("Y");
    $ha = $ah - 1;
    $eek = array('Year(diterima)' => $ha, 'klasifikasi' => 'biasa');
    $this->db->where($eek);
    $this->db->delete("tb_arsip");
    return true;
  }

  public function dipinjam_Arsip($id)
  {
    $data = array(
      'dipinjam' => "Ya",
    );
    $this->db->where('id', $id_petugas);
    return $this->db->update("tb_arsip", $data);

  }

  public function getAllUnit()
  {
    $this->db->select("*");
    $this->db->from("tb_unit");
    return $this->db->get()->result();
  }

  public function datatableArsip()
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
      $this->db->like('id', $key);
      $this->db->or_like('indeks', $key);
      $this->db->or_like('darikepada', $key);
      $this->db->or_like('alamatsurat', $key);
      $this->db->or_like('kota', $key);
      $this->db->or_like('nomorsurat', $key);
      $this->db->or_like('tanggalsurat', $key);
      $this->db->or_like('perihal', $key);
      $this->db->or_like('isiringkas', $key);
      $this->db->or_like('jenissurat', $key);
      $this->db->or_like('diterima', $key);
      $this->db->or_like('unit', $key);
      $this->db->or_like('sistem', $key);
      $this->db->or_like('kode', $key);
      $this->db->or_like('file', $key);
      $this->db->or_like('catatan', $key);
      $this->db->or_like('klasifikasi', $key);
      $this->db->or_like('arsiparis', $key);
      $this->db->or_like('aktif', $key);
      $this->db->or_like('lampiran', $key);
      $this->db->or_like('dipinjam', $key);
      $this->session->set_userdata('search_datatablearsip', $key);
    }else{
      $this->session->unset_userdata('search_datatablearsip');
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("tb_arsip");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountArsip();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($this->level == "1") {
        $btn = '<a href="#form" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="submit('.$val->id.')" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
        <a href="'.site_url('Arsip/detail/'.$val->id).'" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Detail & File"><i class="fa fa-eye"></i></a>
        <a href="#" data-url="'.site_url('Arsip/arsip_delete/'.$val->id).'" class="btn btn-danger btn-xs btn-deletearsip" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';
      }else{
        $btn = '<a href="'.site_url('Arsip/detail/'.$val->id).'" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Detail & File"><i class="fa fa-eye"></i></a>';
      }
      if ($val->dipinjam == "tidak") {
        $act = '<a href="'.site_url('Arsip/pinjam_detail/'.$val->id).'" class="btn btn-primary btn-xs" data-toggle="tooltip" title="pinjam"><i class="fa fa-book"></i><center>Pinjam</center></a>';
      }else {
       $act = '<a href="'.site_url('Arsip/kembali_detail/'.$val->id).'" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Kembali"><i class="fa fa-refresh"></i><center>Kembali</center></a>';
     }

     $output['data'][] = array(

      $val->darikepada,
      $val->nomorsurat,
      $val->perihal,
      $val->dipinjam,
      $val->aktif,
      $btn,
      $act
    );
   }
   return $output;
 }

 public function data()
 {
  $this->db->select('tb_pinjam.id, tb_arsip.darikepada, tb_pinjam.tanggal_pinjam');
  $this->db->from('tb_pinjam, tb_arsip');
  $this->db->where('tb_pinjam.arsip = tb_arsip.id');
  return $this->db->get()->result();
}

public function datatablePeminjaman()
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
    $this->db->like('id', $key);
    $this->db->or_like('arsip', $key);
    $this->db->or_like('nama_peminjam', $key);
    $this->db->or_like('unit', $key);
    $this->db->or_like('kondisi_pinjam', $key);
    $this->db->or_like('tanggal_pinjam', $key);
    $this->db->or_like('batas_waktu', $key);
    $this->db->or_like('tanggal_kembali', $key);
    $this->db->or_like('kondisi_kembali', $key);
    $this->db->or_like('petugas', $key);
    $this->db->or_like('catatan', $key);
    $this->session->set_userdata('search_datatablehaha', $key);    
  }else{
    $this->session->unset_userdata('search_datatablehaha');
  }

  $order = $this->_post('order');
  $column = isset($order[0]['column'])?$order[0]['column']:-1;
  if($column >= 0 && $column < count($array)){
    $ord = $array[$column];
    $by = $order[0]['dir'];
    $this->db->order_by($ord , $by);
  }

  $this->db->select("SQL_CALC_FOUND_ROWS *", FALSE);
  $this->db->from('tb_pinjam');
  $sql = $this->db->get();
  $q = $sql->result();
  $this->db->select("FOUND_ROWS() AS total_row");
  $row = $this->db->get()->row();

  $sEcho = $this->_post('draw');
  $getCountAll = $this->getCountPeminjaman();
  $output = array(
    "draw" => intval($sEcho),
    "recordsTotal" => $getCountAll,
    "recordsFiltered" => $row->total_row,
    "data" => array()
  );

  foreach ($q as $val) {
    $bisa = $this->ambilarsip($val->arsip);
    $btn = '';
    if ($val->tanggal_kembali == "0000-00-00") {
      $btn = '<a href="#form" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="submit('.$val->id.')" class="btn btn-info btn-xs" data-toggle="tooltip" title="Pengembalian"><i class="fa fa-refresh"></i></a>';
    }else {
      $btn = '';
    }

    $output['data'][] = array(

      $val->id,
      $bisa,
      $val->nama_peminjam,
      $val->unit,
      $val->kondisi_pinjam,
      $val->tanggal_pinjam,
      $val->batas_waktu,
      $val->tanggal_kembali,
      $val->kondisi_kembali,
      $val->petugas,
      $val->catatan,
      $btn
    );
  }
  return $output;
}
public function excelArsip()
{
  $key = $this->session->userdata('search_datatablearsip');
  $this->db->select("*");
  $this->db->from("tb_arsip");
  if($key != null){
    $this->db->group_start();
    $this->db->like('id', $key);
    $this->db->or_like('indeks', $key);
    $this->db->or_like('darikepada', $key);
    $this->db->or_like('alamatsurat', $key);
    $this->db->or_like('kota', $key);
    $this->db->or_like('nomorsurat', $key);
    $this->db->or_like('tanggalsurat', $key);
    $this->db->or_like('perihal', $key);
    $this->db->or_like('isiringkas', $key);
    $this->db->or_like('jenissurat', $key);
    $this->db->or_like('diterima', $key);
    $this->db->or_like('unit', $key);
    $this->db->or_like('sistem', $key);
    $this->db->or_like('kode', $key);
    $this->db->or_like('file', $key);
    $this->db->or_like('catatan', $key);
    $this->db->or_like('klasifikasi', $key);
    $this->db->or_like('arsiparis', $key);
    $this->db->or_like('aktif', $key);
    $this->db->or_like('lampiran', $key);
    $this->db->or_like('dipinjam', $key);
    $this->db->group_end();
  }
  return $this->db->get()->result();
}
public function excelPeminjaman()
{
  $key = $this->session->userdata('search_datatablehaha');
  $this->db->select("SQL_CALC_FOUND_ROWS *", FALSE);
  $this->db->from('tb_pinjam');
  if($key != null){
    $this->db->group_start();    
    $this->db->like('tb_pinjam.id', $key);
    $this->db->or_like('tb_pinjam.arsip', $key);
    $this->db->or_like('tb_pinjam.nama_peminjam', $key);
    $this->db->or_like('tb_pinjam.unit', $key);
    $this->db->or_like('tb_pinjam.kondisi_pinjam', $key);
    $this->db->or_like('tb_pinjam.tanggal_pinjam', $key);
    $this->db->or_like('tb_pinjam.batas_waktu', $key);
    $this->db->or_like('tb_pinjam.tanggal_kembali', $key);
    $this->db->or_like('tb_pinjam.kondisi_kembali', $key);
    $this->db->or_like('tb_pinjam.petugas', $key);
    $this->db->or_like('tb_pinjam.catatan', $key);
    $this->db->group_end();
  }
  return $this->db->get()->result();
}
}


