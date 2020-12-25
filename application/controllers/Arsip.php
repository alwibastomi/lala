<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends Core
{
  private $level;
  function __construct()
  {
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  public function index()
  {
    if($this->isLogin)
    {
      $data['allArsip'] = $this->m_arsip->getAllArsip();
      $this->renderpage('admin/pages/arsip', $data);
    }else{
      redirect('admin');
    }
  }
  public function ListPeminjaman()
  {
    if($this->isLogin)
    {
      $data['allPeminjaman'] = $this->m_arsip->getAllPeminjaman();
      $this->renderpage('admin/pages/peminjaman', $data);
    }else{
      redirect('admin');
    }
  } 
  public function Arsip_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }

    $file = './files/pdf/'.$filename;
    header('Content-type: application/pdf');
    @readfile($file);
    
  }
  public function arsip_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1){
      $this->form_validation->set_rules('diterima', 'diterima', 'required');

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($this->m_arsip->addArsip() == "success"){
          $this->upload_file($this->input->post('file'), './files/pdf');
          $data['alert'] = "success";
        }else {
          $data['alert'] = "exist";
        }
      }
      $this->renderpage('admin/pages/arsip_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function addArsipajax()
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
    $lampiran = $this->input->post('lampiran');

    if ( $dari == '' ) {
      $result['pesan'] = "Dari / Kepada Kosong";
    }else if( $indeks == '' ) {
      $result['pesan'] = "Indeks Kosong";
    }else if( $alamatsurat == '' ) {
      $result['pesan'] = "Alamat Surat Kosong";
    }else if( $kota == '' ) {
      $result['pesan'] = "Kota Kosong";
    }else if( $nomorsurat == '' ) {
      $result['pesan'] = "Nomor Surat Kosong";
    }else if( $tglsurat == '' ) {
      $result['pesan'] = "Tanggal Surat Kosong";
    }else if( $perihal == '' ) {
      $result['pesan'] = "Perihal Kosong";
    }else if( $isiringkas == '' ) {
      $result['pesan'] = "Isi Ringkas Kosong";
    }else if( $jenissurat == '' ) {
      $result['pesan'] = "Jenis Surat Kosong";
    }else if( $lampiran == '' ) {
      $result['pesan'] = "Lampiran Kosong";
    }else{
      $result['pesan'] = '';

      $this->db->query("ALTER TABLE tb_arsip AUTO_INCREMENT = 1");
      if($this->m_arsip->add_arsipajax() == "success"){
       $config['upload_path'] = './files/pdf';
       $config['allowed_types'] = 'pdf';
       $config['file_name']  = $this->input->post('file');
       $this->load->library('upload');
       $this->upload->initialize($config);
       $data = array();

       if ($this->upload->do_upload('file')){
         $updata = $this->upload->data();
       }
     }
   }
   echo json_encode($result);
 }

 public function addFile(){
  $result['pesan'] = $this->input->post('id');
  if($this->m_arsip->addFileajax() == "success"){
    $this->upload_file($_FILES["file"]["name"], './files/pdf');
  }
  echo json_encode($result);
}

public function ambil_id()
{
  $id = $this->input->post('id');
  $where = array('id' => $id);
  $dataarsip = $this->m_arsip->ambil_kode('tb_arsip', $where)->result();
  echo json_encode($dataarsip);
}
public function pengembalian_pinjaman()
{
  $id = $this->input->post('id');
  $tgl_kembali = date('Y-m-d');

  $kondisi_kembali = $this->input->post('kondisi_kembali');

  if( $id == '' ) {
    $result['pesan'] = "ID Unit Kosong";
  }else if( $tgl_kembali == '' ) {
    $result['pesan'] = "Tanggal Kembali Kosong";
  }else if( $kondisi_kembali == '' ) {
    $result['pesan'] = "Kondisi Kembali Kosong";
  }else{
    $result['pesan'] = '';

    $where = array('id' => $id);

    $data = array(
      'id' => $id,
      'tanggal_kembali' => $tgl_kembali,
      'kondisi_kembali' => $kondisi_kembali
    );
    $this->m_unit->edit_unitajax($where, $data, 'tb_pinjam');
  }
  echo json_encode($result);
}
public function pengembalian_pinjaman1()
{
  $id = $this->input->post('id1');
  $tanggal_kembali = date('Y-m-d');
  $kondisi_kembali = $this->input->post('kondisi_kembali');

  if( $id == '' ) {
    $result['pesan'] = "ID Arsip Kosong";
  }else if( $tanggal_kembali == '' ) {
    $result['pesan'] = "Tanggal Kembali Kosong";
  }else if( $kondisi_kembali == '' ) {
    $result['pesan'] = "Kondisi Kembali Kosong";
  }else{
    $result['pesan'] = '';

    $this->m_unit->edit_unitajax1();
  }
  echo json_encode($result);
}

public function editArsipajax()
{
  $id = $this->input->post('id');
  $indeks = $this->input->post('indeks');
  $dari = $this->input->post('dari');
  $alamatsurat = $this->input->post('alamatsurat');
  $kota = $this->input->post('kota');

  if ( $id == '' ) {
    $result['pesan'] = "ID Kosong";
  }else if( $dari == '' ) {
    $result['pesan'] = "Dari / Kepada Kosong";
  }else if( $alamatsurat == '' ) {
    $result['pesan'] = "Alamat Surat Kosong";
  }else if( $kota == '' ) {
    $result['pesan'] = "Kota Kosong";
  }else{
    $result['pesan'] = '';

    $this->m_arsip->edit_arsipajax();
  }
  echo json_encode($result);
}
public function pinjam_detail($id)
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }    
  $this->form_validation->set_rules('bataswaktu', 'bataswaktu', 'required');

  if($this->form_validation->run() == false){
    $data['alert'] = "";
  }else{
    if($this->m_arsip->pinjamArsip() == "success"){
      if($this->m_arsip->dipinjamiya() == "success"){
        $data['alert'] = "success";
      }
    }else {
      $data['alert'] = "exist";
    }
  }
  $data['arsip'] = $this->m_arsip->getArsip($id);
  $this->renderpage('admin/pages/arsip_transaksi', $data);
}
public function detail($id)
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }    
  $this->form_validation->set_rules('id', 'id', 'required');

  if($this->form_validation->run() == false){
    $data['alert'] = "";
  }else{
    if($this->m_arsip->file() == "success"){
      if($_FILES['file']['name'] != null){
        if(file_exists("./files/pdf/".$this->input->post('old'))){
          unlink("./files/pdf/".$this->input->post('old'));
        }
        $this->upload_file($_FILES['file']['name'], './files/pdf/');
        $data['alert'] = "success";
      }
    }else {
      $data['alert'] = "exist";
    }
  }
  $data['arsip'] = $this->m_arsip->getArsip($id);
  if ($this->level == 1) {
    $this->renderpage('admin/pages/arsip_detail', $data);
  } else {

    $this->renderpage('admin/pages/detail_anggota', $data);
  }
}
public function cetak_pdf($id)
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }
  $data['arsip'] = $this->m_arsip->getArsip($id);
  $this->renderpage('Cetak_arsip', $data);
}
public function cetak_dp()
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }
  $this->renderpage('Cetak_dp', $data);
}
public function kembali_detail($id)
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }    
  $this->form_validation->set_rules('id', 'id', 'required');

  if($this->form_validation->run() == false){
    $data['alert'] = "";
  }else{
    if($this->m_arsip->kembaliArsip() == "success"){

      if ($this->m_arsip->updatedipinjam() == "success") {
        $data['pesan'] = "success";
      }
    }else {
      $data['alert'] = "exist";
    }
  }
  $data['arsip'] = $this->m_arsip->getArsip($id);
  $this->renderpage('admin/pages/kembali_transaksi', $data);
}
public function arsip_datatable()
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }
  $ret = $this->m_arsip->datatableArsip();
  echo json_encode($ret);
  die();
}  
public function ambil_id_peminjaman()
{
  $id = $this->input->post('id');
  $where = array('id' => $id);
  $dataunit = $this->m_unit->ambil_kode('tb_pinjam', $where)->result();
  echo json_encode($dataunit);
}
public function peminjaman_datatable()
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }
  $ret = $this->m_arsip->datatablePeminjaman();
  echo json_encode($ret);
  die();
}  
public function pinjam_datatable()
{
  $data = $this->m_arsip->datatablePeminjaman();
  echo json_encode($data);
}
public function arsip_delete($id)
{
  if ($this->m_arsip->deletepinjamarsip($id)) {
    $this->m_arsip->deletearsip($id);
  }
  return true;
}

public function arsip_excel()
{
  if(!$this->isLogin){
    redirect('admin');
    die();
  }
  $a = 1;
  if($a == 1){
    date_default_timezone_set("Asia/Jakarta");
    $date = date("Ymd");
    $label = ": ".$this->session->userdata('search_datatablearsip');
    $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/SpasArsip.xltx");
    $objPHPExcel->setActiveSheetIndex(0);

    $data = $this->m_arsip->excelArsip();
    $n = 1;
    $row = 9;
    $count = count($data);
    $objPHPExcel->getActiveSheet()->setCellValue("K1", "Exported at ".$date);
    $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
    $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
    foreach ($data as $value) {
      if($n % 2 == 1){
        $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
      }

      $objPHPExcel->getActiveSheet()->setCellValue("C1", 'Arsip'." List");
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->id);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->indeks);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->darikepada);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->alamatsurat);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->kota);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->nomorsurat);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->tanggalsurat);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->perihal);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->isiringkas);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $row, $value->jenissurat);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $row, $value->diterima);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $row, $value->unit);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $row, $value->sistem);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $row, $value->kode);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $row, $value->file);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $row, $value->catatan);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $row, $value->klasifikasi);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $row, $value->arsiparis);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $row, $value->aktif);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $row, $value->lampiran);
      $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(21, $row, $value->dipinjam);
      $row++;
      $n++;
    }
    $filename = $date."-SpasPeminjaman.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

  public function peminjaman_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $a = 1;
    if($a == 1){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatablehaha');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/SpasPeminjaman.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_arsip->excelPeminjaman();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("K1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", 'Peminjaman'." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->id);
        $bisa = $this->m_arsip->ambilarsip($value->arsip);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $bisa);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nama_peminjam);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->unit);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->kondisi_pinjam);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->tanggal_pinjam);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->batas_waktu);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->tanggal_kembali);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->kondisi_kembali);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $row, $value->petugas);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $row, $value->catatan);
        $row++;
        $n++;
      }
      $filename = $date."-SpasPeminjaman.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }
}