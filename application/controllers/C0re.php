<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c0re extends Core
{
  private $level;
  private $access;
  private $objPHPExcel;
  function __construct()
  {
    parent::__construct();
    $this->level = $this->session->userdata('level');
    $this->access = explode(",", $this->session->userdata('access'));
    $this->objPHPExcel = new PHPExcel();
  }

  //Mile
  public function milestone()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->renderpage('admin/pages/milestone');
  }

  //Customer Complaint Handling
  public function p06()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $data['iduser'] = $this->session->userdata('iduser');
    $data['allp06'] = $this->m_c0re->getAllp06();
    $title = "Customer Complaint Handling";
    $this->renderpage('admin/pages/p06', $data, $title);
  }
  public function p06_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("06", $this->access)){
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('idcust', 'idcust', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['category'] = $this->m_category->getAllCategoryId("06");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateregister = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym", strtotime($dateregister)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkp06Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getp06($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addp06($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/06');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p06_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p06_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/06/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p06_edit($noreg)
  {
     if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("06", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('idcust', 'idcust', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p06'] = $this->m_c0re->getp06($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/06/".$noreg.".pdf");
          $edit = $this->m_c0re->editp06($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/00');
          }
        }else{
          $edit = $this->m_c0re->editp06($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p06_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p06_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("6", $this->access)){
      $delete = $this->m_c0re->deletep06($noreg);
      if($delete){
        unlink("./files/pdf/06/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p06_datatable()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $ret = $this->m_c0re->datatablep06();
    echo json_encode($ret);
    die();
  }
  public function p06_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable06');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos06.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelp06();
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

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->idcust);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos06.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

public function p061()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $data['iduser'] = $this->session->userdata('iduser');
    $data['allp061'] = $this->m_c0re->getAllp061();
    $title = "Customer Complaint Handling";
    $this->renderpage('admin/pages/p061', $data, $title);
  }
  public function p061_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("06", $this->access)){
      $this->form_validation->set_rules('idcategory', 'Category Record', 'required');
      //$this->form_validation->set_rules('nolog', 'No. Claim', 'required');
      $this->form_validation->set_rules('dateclaim', 'Date Claim', 'required');
      $this->form_validation->set_rules('idcust', 'Customer', 'required');
      $this->form_validation->set_rules('model', 'Model', 'required');
      $this->form_validation->set_rules('ncclaim', 'Defect', 'required');
      $this->form_validation->set_rules('qty', 'Qty', 'required');
      //$this->form_validation->set_rules('daterequest', 'Date Request', 'required');
      //$this->form_validation->set_rules('datereply', 'Date Reply', 'required');
      $this->form_validation->set_rules('judge', 'Judge', 'required');
      $this->form_validation->set_rules('status', 'Status', 'required');

      $data['iduser'] = $this->session->userdata('iduser');
      $data['category'] = $this->m_category->getAllCategoryId("06");
      $data['customer'] = $this->m_customer->getAllCustomer();

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateclaim = date("Y-m-d", strtotime($this->input->post('dateclaim')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym",strtotime($dateclaim)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkp061Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getp06($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addp061($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/061');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $title = "Customer Complaint Handling Add";
      $this->renderpage('admin/pages/p061_add', $data, $title);
    }else{
      redirect('admin');
    }
  }
  public function p061_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/061/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p061_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("06", $this->access)){
      //$this->form_validation->set_rules('nolog', 'No. Claim', 'required');
      $this->form_validation->set_rules('dateclaim', 'Date Claim', 'required');
      $this->form_validation->set_rules('idcust', 'Customer', 'required');
      $this->form_validation->set_rules('model', 'Model', 'required');
      $this->form_validation->set_rules('ncclaim', 'Defect', 'required');
      $this->form_validation->set_rules('qty', 'Qty', 'required');
      //$this->form_validation->set_rules('daterequest', 'Date Request', 'required');
      //$this->form_validation->set_rules('datereply', 'Date Reply', 'required');
      $this->form_validation->set_rules('judge', 'Judge', 'required');
      $this->form_validation->set_rules('status', 'Status', 'required');

      $data['customer'] = $this->m_customer->getAllCustomer();
      $data['p061'] = $this->m_c0re->getp061($noreg);
      $data['edit'] = true;

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/061/".$noreg.".pdf");
          $edit = $this->m_c0re->editp061($noreg);
          if($edit){
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/061');
          }
        }else{
          $edit = $this->m_c0re->editp061($noreg);
          if($edit){
            $data['alert'] = "success_edit";
          }
        }
      }
      $title = "Customer Complaint Handling Edit";
      $this->renderpage('admin/pages/p061_add', $data, $title);
    }else{
      redirect('admin');
    }
  }
  public function p061_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("6", $this->access)){
      $delete = $this->m_c0re->deletep061($noreg);
      if($delete){
        unlink("./files/pdf/061/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p061_datatable()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $ret = $this->m_c0re->datatablep061();
    echo json_encode($ret);
    die();
  }
  public function p061_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
    }
    if($this->level == 1 || in_array("6", $this->access)){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable061');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos061.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelp061();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("L1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':L'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $nolog = $value->nolog;
        $daterequest = $value->daterequest;
        $datereply = $value->datereply;
        if($nolog == ""){ $nolog = "-"; }
        if($daterequest == "1970-01-01"){ $daterequest = "-"; }
        if($datereply == "1970-01-01"){ $datereply = "-"; }

        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $nolog);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->dateclaim);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->idcust);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->model);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->ncclaim);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->qty);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $daterequest);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $datereply);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $row, $value->judge);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $row, $value->status);
        $row++;
        $n++;
      }
      $filename = $date."-dinos061.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

  //Peocess Design
  public function p02()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->unset_userdata('categoryFilter');
    $data['allp02'] = $this->m_c0re->getAllp02();
    $title = "Management";
    $this->renderpage('admin/pages/p02', $data, $title);
  }
  public function p02_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("02", $this->access)){
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['category'] = $this->m_category->getAllCategoryId("00");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateregister = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym", strtotime($dateregister)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkp02Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getp02($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addp02($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/00');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p02_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p02_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/00/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p02_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("02", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p02'] = $this->m_c0re->getp02($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/00/".$noreg.".pdf");
          $edit = $this->m_c0re->editp02($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/00');
          }
        }else{
          $edit = $this->m_c0re->editp02($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p02_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p02_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("02", $this->access)){
      $delete = $this->m_c0re->deletep02($noreg);
      if($delete){
        unlink("./files/pdf/00/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p02_datatable()
  {
    $ret = $this->m_c0re->datatablep02();
    echo json_encode($ret);
    die();
  }
  public function p02_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable00');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos00.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelp02();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("J1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos00.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

  //Material Control
  public function p03()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->unset_userdata('categoryFilter');
    $data['iduser'] = $this->session->userdata('iduser');
    $data['allP03'] = $this->m_c0re->getAllP03();
    $data['categoryFilterP03'] = $this->m_c0re->categoryFilterP03();
    $this->session->set_userdata("p03CategoryFilter", "03");
    $title = "Material Control";
    $this->renderpage('admin/pages/p03', $data, $title);
  }
  public function p03_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("3", $this->access)){
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['iduser'] = $this->session->userdata('iduser');
      $data['category'] = $this->m_category->getAllCategoryId("03");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $datereg = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        //$newtitle = $category->nmcategory." ".$title;
        $ym = substr(date("Ym", strtotime($datereg)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkP03Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getP03($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addP03($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/03');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $title = "Material Control Add";
      $this->renderpage('admin/pages/p03_add', $data, $title);
    }else{
      redirect('admin');
    }
  }
  public function p03_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/03/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p03_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("3", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p03'] = $this->m_c0re->getP03($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/03/".$noreg.".pdf");
          $edit = $this->m_c0re->editP03($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/03');
          }
        }else{
          $edit = $this->m_c0re->editP03($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p03_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p03_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("3", $this->access)){
      $delete = $this->m_c0re->deleteP03($noreg);
      if($delete){
        unlink("./files/pdf/03/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p03_datatable()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $ret = $this->m_c0re->datatableP03();
    echo json_encode($ret);
    die();
  }
  public function p03_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable03');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos03.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelP03();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("J1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos03.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

  //Production Process
  public function p04()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->unset_userdata('categoryFilter');
    $data['allP04'] = $this->m_c0re->getAllP04();
    $title = "Management";
    $this->renderpage('admin/pages/p04', $data, $title);
  }
  public function p04_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("04", $this->access)){
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['category'] = $this->m_category->getAllCategoryId("04");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateregister = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym", strtotime($dateregister)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkP04Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getP04($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addP04($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/04');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p04_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p04_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/04/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p04_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("04", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p04'] = $this->m_c0re->getP04($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/04/".$noreg.".pdf");
          $edit = $this->m_c0re->editP04($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/04');
          }
        }else{
          $edit = $this->m_c0re->editP04($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p04_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p04_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("04", $this->access)){
      $delete = $this->m_c0re->deleteP04($noreg);
      if($delete){
        unlink("./files/pdf/04/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p04_datatable()
  {
    $ret = $this->m_c0re->datatableP04();
    echo json_encode($ret);
    die();
  }
  public function p04_excel()
  {
    {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable04');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos04.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelP04();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("J1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos04.xlsx";
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

  //Delivery
  public function p05()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->unset_userdata('categoryFilter');
    $data['allp05'] = $this->m_c0re->getAllp05();
    $title = "Management";
    $this->renderpage('admin/pages/p05', $data, $title);
  }
  public function p05_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("05", $this->access)){
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['category'] = $this->m_category->getAllCategoryId("05");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateregister = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym", strtotime($dateregister)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkp05Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getp05($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addp05($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/05');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p05_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p05_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/05/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p05_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("05", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p05'] = $this->m_c0re->getp05($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/05/".$noreg.".pdf");
          $edit = $this->m_c0re->editp05($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/05');
          }
        }else{
          $edit = $this->m_c0re->editp05($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p05_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p05_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("05", $this->access)){
      $delete = $this->m_c0re->deletep05($noreg);
      if($delete){
        unlink("./files/pdf/05/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p05_datatable()
  {
    $ret = $this->m_c0re->datatablep05();
    echo json_encode($ret);
    die();
  }
  public function p05_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable05');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos05.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelp05();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("J1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos05.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }


  //Control NC
  public function p07()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->unset_userdata('categoryFilter');
    $data['iduser'] = $this->session->userdata('iduser');
    $data['allp07'] = $this->m_c0re->getAllp07();
    $title = "c0re";
    $this->renderpage('admin/pages/p07', $data, $title);
  }
  public function p07_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      $this->form_validation->set_rules('idcategory', 'Category Record', 'required');
      $this->form_validation->set_rules('idcategory', 'ID Category', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['category'] = $this->m_category->getAllCategoryId("07");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $dateregister = date("Y-m-d", strtotime($this->input->post('datereg')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym", strtotime($dateregister)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkp07Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getp07($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addp07($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/07');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p07_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p07_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/07/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p07_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('month_a', 'Month A', 'required');
      $this->form_validation->set_rules('year_a', 'Year A', 'required');
      $this->form_validation->set_rules('month_z', 'Month Z', 'required');
      $this->form_validation->set_rules('year_z', 'Year Z', 'required');

      $data['edit'] = true;
      $data['p07'] = $this->m_c0re->getp07($noreg);

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          unlink("./files/pdf/07/".$noreg.".pdf");
          $edit = $this->m_c0re->editp07($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/07');
          }
        }else{
          $edit = $this->m_c0re->editp07($noreg);
          if($edit){
            //success
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p07_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p07_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      if($this->m_c0re->getp07LaminNoreg($noreg) == null){
        $delete = $this->m_c0re->deletep07($noreg);
        if($delete){
          unlink("./files/pdf/07/".$noreg.".pdf");
          return true;
        }
      }else{
        echo "0";
      }
    }else{
      redirect('admin');
    }
  }
  public function p07_datatable()
  {
    $ret = $this->m_c0re->datatablep07();
    echo json_encode($ret);
    die();
  }
  public function p07_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level < 4 ){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $label = ": ".$this->session->userdata('search_datatable07');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos07.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelp07();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("J1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':J'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }

        $objPHPExcel->getActiveSheet()->setCellValue("C1", $value->nmcategory." List");
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $value->datereg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->nmcategory);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->title);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->period_a);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->period_z);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->period_s);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->period_x);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->period_y);
        $row++;
        $n++;
      }
      $filename = $date."-dinos07.xlsx";
      header('Content-Type: application/vnd.ms-excel'); //mime type
      header('Content-Disposition: attachment;filename="'.$filename.'"');
      header('Cache-Control: max-age=0'); //no cache
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
    }else{
      redirect('admin');
    }
  }

 //Control of NC Product
  public function p071_filter()
  {
    $fiscal = $this->input->post('val');
    if($fiscal != ""){
      $this->session->set_userdata('fiscal071', $fiscal);
    }else{
      $this->session->set_userdata('fiscal071', null);
    }
    echo json_encode(array('ret' => true));
    die();
  }
  public function p071()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $this->session->set_userdata('fiscal071', null);
    $data['iduser'] = $this->session->userdata('iduser');
    $data['allP071'] = $this->m_c0re->getAllP071();
    $this->renderpage('admin/pages/p071', $data);
  }
  public function p071_add()
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      $this->form_validation->set_rules('idcategory', 'Category Record', 'required');
      $this->form_validation->set_rules('datefine', 'Date', 'required');
      $this->form_validation->set_rules('classification', 'Classification', 'required');
      $this->form_validation->set_rules('rank', 'Rank', 'required');
      $this->form_validation->set_rules('model', 'Model', 'required');
      $this->form_validation->set_rules('defect', 'Defect', 'required');
      $this->form_validation->set_rules('qty', 'Qty', 'required');
      $this->form_validation->set_rules('standard', 'Standard', 'required');
      $this->form_validation->set_rules('actual', 'Actual', 'required');
      $this->form_validation->set_rules('line', 'Line', 'required');
      $this->form_validation->set_rules('mold', 'Mold', 'required');
      $this->form_validation->set_rules('stamp', 'Stamp', 'required');
      $this->form_validation->set_rules('causedept', 'Cause Dept', 'required');
      $this->form_validation->set_rules('causeshift', 'Cause Shift', 'required');
      $this->form_validation->set_rules('causegroup', 'Cause Group', 'required');
      $this->form_validation->set_rules('finddept', 'Find Dept', 'required');
      $this->form_validation->set_rules('findshift', 'Find Shift', 'required');
      $this->form_validation->set_rules('findgroup', 'Find Group', 'required');
      $this->form_validation->set_rules('remark', 'Remark', 'required');

      $data['iduser'] = $this->session->userdata('iduser');
      $data['category'] = $this->m_category->getAllCategoryId("071");

      if($this->form_validation->run() == false){
        $data['alert'] = "";
        $data['edit'] = false;
      }else{
        $idcategory = $this->input->post('idcategory');
        $datefine = date("Y-m-d", strtotime($this->input->post('datefine')));
        $category = $this->m_category->getCategory($idcategory);
        $ym = substr(date("Ym",strtotime($datefine)), -4);
        $nameCheck = $idcategory.$ym;
        $nomor = 1;
        $list = $this->m_c0re->checkP071Noreg($nameCheck);
        if ($list != null) {
          $lastPdf = "";
          foreach ($list as $li) {
            $lastPdf = $li;
          }
          $nomor = intval(substr($lastPdf->noreg, -2, 2)) + 1;
        }
        $nomor = str_pad($nomor, 2, '0', STR_PAD_LEFT);
        $newfilename = $nameCheck.$nomor;
        if($this->m_c0re->getP071($newfilename)){
          //exist
          $data['alert'] = "exist";
          $data['edit'] = false;
        }else{
          $add = $this->m_c0re->addP071($newfilename);
          if($add){
            //success
            $this->upload_file($newfilename, './files/pdf/071');
            $data['alert'] = "success";
            $data['edit'] = false;
          }
        }
      }
      $this->renderpage('admin/pages/p071_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p071_read($filename)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->get_browser_name($_SERVER['HTTP_USER_AGENT']) === 'Firefox'){
      $this->load->view('admin/pages/oops');
    }else{
      $file = './files/pdf/071/'.$filename.".pdf";
      header('Content-type: application/pdf');
      @readfile($file);
    }
  }
  public function p071_detail($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    $data['p071'] = $this->m_c0re->getP071($noreg);
    $this->renderpage('admin/pages/p071_detail', $data);
  }
  public function p071_edit($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      $this->form_validation->set_rules('datefine', 'Date', 'required');
      $this->form_validation->set_rules('classification', 'Classification', 'required');
      $this->form_validation->set_rules('rank', 'Rank', 'required');
      $this->form_validation->set_rules('model', 'Model', 'required');
      $this->form_validation->set_rules('defect', 'Defect', 'required');
      $this->form_validation->set_rules('qty', 'Qty', 'required');
      $this->form_validation->set_rules('standard', 'Standard', 'required');
      $this->form_validation->set_rules('actual', 'Actual', 'required');
      $this->form_validation->set_rules('line', 'Line', 'required');
      $this->form_validation->set_rules('mold', 'Mold', 'required');
      $this->form_validation->set_rules('stamp', 'Stamp', 'required');
      $this->form_validation->set_rules('causedept', 'Cause Dept', 'required');
      $this->form_validation->set_rules('causeshift', 'Cause Shift', 'required');
      $this->form_validation->set_rules('causegroup', 'Cause Group', 'required');
      $this->form_validation->set_rules('finddept', 'Find Dept', 'required');
      $this->form_validation->set_rules('findshift', 'Find Shift', 'required');
      $this->form_validation->set_rules('findgroup', 'Find Group', 'required');
      $this->form_validation->set_rules('remark', 'Remark', 'required');

      $data['iduser'] = $this->session->userdata('iduser');
      $data['p071'] = $this->m_c0re->getP071($noreg);
      $data['edit'] = true;

      if($this->form_validation->run() == false){
        $data['alert'] = "";
      }else{
        if($_FILES['file']['name'] != null){
          if(file_exists("./files/pdf/071/".$noreg.".pdf")){
            unlink("./files/pdf/071/".$noreg.".pdf");
          }
          $edit = $this->m_c0re->editP071($noreg);
          if($edit){
            $data['alert'] = "success_edit";
            $this->upload_file($this->input->post('fname'), './files/pdf/071');
          }
        }else{
          $edit = $this->m_c0re->editP071($noreg);
          if($edit){
            $data['alert'] = "success_edit";
          }
        }
      }
      $this->renderpage('admin/pages/p071_add', $data);
    }else{
      redirect('admin');
    }
  }
  public function p071_delete($noreg)
  {
    if(!$this->isLogin){
      redirect('admin');
      die();
    }
    if($this->level == 1 || in_array("07", $this->access)){
      $delete = $this->m_c0re->deleteP071($noreg);
      if($delete){
        unlink("./files/pdf/071/".$noreg.".pdf");
        return true;
      }
    }else{
      redirect('admin');
    }
  }
  public function p071_datatable()
  {
    if(!$this->isLogin){
      redirect('admin');
    }
    $ret = $this->m_c0re->datatableP071();
    echo json_encode($ret);
    die();
  }
  public function p071_excel()
  {
    if(!$this->isLogin){
      redirect('admin');
    }
    if($this->level == 1 || in_array("07", $this->access)){
      date_default_timezone_set("Asia/Jakarta");
      $date = date("Ymd");
      $fiscal = ": ".$this->session->userdata('fiscal071');
      $label = ": ".$this->session->userdata('search_datatable071');
      $objPHPExcel = PHPExcel_IOFactory::load("./files/excel/dinos071.xltx");
      $objPHPExcel->setActiveSheetIndex(0);

      $data = $this->m_c0re->excelP071();
      $n = 1;
      $row = 9;
      $count = count($data);
      $objPHPExcel->getActiveSheet()->setCellValue("U1", "Exported at ".$date);
      $objPHPExcel->getActiveSheet()->setCellValue("C4", $fiscal);
      $objPHPExcel->getActiveSheet()->setCellValue("C5", $label);
      $objPHPExcel->getActiveSheet()->insertNewRowBefore(9, $count);
      foreach ($data as $value) {
        if($n % 2 == 1){
          $objPHPExcel->getActiveSheet()->getStyle('A'.$row.':U'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F0F3FA');
        }
        $noftkp = $value->noftkp;
        if($noftkp == ""){ $noftkp = "-"; }
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $row, $n);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $row, $value->noreg);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $noftkp);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->datefine);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->classification);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, $row, $value->rank);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, $row, $value->model);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, $row, $value->defect);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, $row, $value->qty);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, $row, $value->standard);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10, $row, $value->actual);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, $row, $value->line);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, $row, $value->mold);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, $row, $value->stamp);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $row, $value->causedept);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $row, $value->causeshift);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $row, $value->causegroup);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(17, $row, $value->finddept);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(18, $row, $value->findshift);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(19, $row, $value->findgroup);
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(20, $row, $value->remark);
        $row++;
        $n++;
      }
      $filename = $date."-dinos071.xlsx";
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
