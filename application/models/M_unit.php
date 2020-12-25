<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

	function _post($name , $xss = true){
		return $this->input->post($name , $xss);
	}

	public function getAllUnit()
	{
		$this->db->select('*');
		$this->db->from('tb_unit');
		return $this->db->get()->result();
	}

	public function getCountunit()
	{
		$this->db->select("count(id) as total");
		$this->db->from("tb_unit");
		$q = $this->db->get()->row();
		return $q->total;
	}

	public function ambil_kode($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function Last()
	{
		$this->db->select('id');
		$this->db->from("tb_unit");
		$this->db->order_by('id DESC LIMIT 1');
	}

	public function add_unitajax()
	{
		$nama = $this->input->post('nama');

		$data = array(
			'nama' => $nama
		);
		return $this->db->insert('tb_unit', $data);
	}

	public function edit_unitajax($where, $data, $tabel)
	{
		$this->db->where($where);
		$this->db->update($tabel, $data);
	}

	public function edit_unitajax1()
	{
		$id = $this->input->post('id1');
		$tanggal_kembali = date('Y-m-d');
		$kondisi_kembali = $this->input->post('kondisi_kembali');

		$data = array(
			'arsip' => $id,
			'tanggal_kembali' => $tanggal_kembali,
			'kondisi_kembali' => $kondisi_kembali
		);

		$eek = array('arsip' => $id, 'tanggal_kembali' => '0000-00-00');
		$this->db->where($eek);
		$this->db->update('tb_pinjam', $data);
	}

	public function deleteunit($id)
	{
		$this->db->delete("tb_unit", array('id' => $id));
		return true;
	}

	public function datatableUnit()
	{
		$array = array("id","nama");
		$start = $this->_post('start');
		$offset = $this->_post('length');
		if ($start != null && $offset != null) {
			$this->db->limit($offset,$start);
		}

		$search = $this->_post('search');
		if($search['value'] != ''){
			$key = $search['value'];
			$this->db->like('id', $key);
			$this->db->or_like('nama', $key);
			$this->session->set_userdata('search_datatableunit', $key);
		}else{
			$this->session->unset_userdata('search_datatableunit');
		}

		$order = $this->_post('order');
		$column = isset($order[0]['column'])?$order[0]['column']:-1;
		if($column >= 0 && $column < count($array)){
			$ord = $array[$column];
			$by = $order[0]['dir'];
			$this->db->order_by($ord , $by);
		}

		$this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
		$this->db->from("tb_unit");
		$sql = $this->db->get();
		$q = $sql->result();
		$this->db->select("FOUND_ROWS() AS total_row");
		$row = $this->db->get()->row();

		$sEcho = $this->_post('draw');
		$getCountAll = $this->getCountUnit();
		$output = array(
			"draw" => intval($sEcho),
			"recordsTotal" => $getCountAll,
			"recordsFiltered" => $row->total_row,
			"data" => array()
		);

		foreach ($q as $val) {
			$btn = '<a href="#form" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="submit('.$val->id.')" class="btn btn-info btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
			<a href="#" data-url="'.site_url('Unit/unit_delete/'.$val->id).'" class="btn btn-danger btn-xs btn-deleteunit" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>';

			$output['data'][] = array(
				$val->id,
				$val->nama,
				$btn
			);
		}
		return $output;
	}

	public function excelUnit()
	{
		$key = $this->session->userdata('search_datatableunit');
		$this->db->select("*");
		$this->db->from("tb_unit");
		if($key != null){
			$this->db->group_start();
			$this->db->like('id', $key);
			$this->db->or_like('nama', $key);
			$this->db->group_end();
		}
		return $this->db->get()->result();
	}
}