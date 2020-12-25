<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends Core
{
	public function index()
	{
		$data['AllUnit'] = $this->m_unit->getAllUnit();
		$this->renderpage('admin/pages/unit', $data);
	}

	public function ambil_id()
	{
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$dataunit = $this->m_unit->ambil_kode('tb_unit', $where)->result();
		echo json_encode($dataunit);
	}

	public function addUnitajax()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');

		if( $nama == '' ) {
			$result['pesan'] = "Nama Unit Kosong";
		}else{
			$result['pesan'] = '';

			$this->db->query("ALTER TABLE tb_unit AUTO_INCREMENT = 1");
			$this->m_unit->add_unitajax();
		}
		echo json_encode($result);
	}

	public function edit_unit()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');

		if( $id == '' ) {
			$result['pesan'] = "ID Unit Kosong";
		}else if( $nama == '' ) {
			$result['pesan'] = "Nama Unit Kosong";
		}else{
			$result['pesan'] = '';

			$where = array('id' => $id);

			$data = array(
				'id' => $id,
				'nama' => $nama
			);
			$this->m_unit->edit_unitajax($where, $data, 'tb_unit');
		}
		echo json_encode($result);
	}

	public function unit_datatable()
	{
		$data = $this->m_unit->datatableUnit();
		echo json_encode($data);
	}

	public function unit_delete($id)
	{
		$this->m_unit->deleteunit($id);
		return true;
	}

	public function Unit_excel()
	{
		if(!$this->isLogin){
			redirect('admin');
			die();
		}
		$a = 1;
		if($a == 1){
			date_default_timezone_set("Asia/Jakarta");
			$date = date("Ymd");
			$label = ": ".$this->session->userdata('search_datatableunit');
			$objPHPExcel = PHPExcel_IOFactory::load("./files/excel/SpasUnit.xltx");
			$objPHPExcel->setActiveSheetIndex(0);

			$data = $this->m_unit->excelUnit();
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

				$objPHPExcel->getActiveSheet()->setCellValue("C1", 'Unit'." List");
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, $row, $n);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, $row, $value->id);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, $row, $value->nama);
				$row++;
				$n++;
			}
			$filename = $date."-SpasUnit.xlsx";
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