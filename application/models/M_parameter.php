<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_parameter extends CI_Model {

	public function select($select = '', $where = ''){
		if ($select != ''){
			$this->db->select($select);
		}
		if ($where != ''){
			$this->db->where($where);
		}
					$this->db->from('tbl_parameter');
		$response = $this->db->get();
		return $response;
	}

	public function insert($data){
		date_default_timezone_set('asia/jakarta');
		$arr = array(
			'kode'					=> @$data['kode'],
			'nama'					=> @$data['nama'],
			'satuan'				=> @$data['satuan'],
			'tarif'					=> @$data['tarif'],
		);

		$response = $this->db->insert('tbl_parameter', $arr);
		return $response;
	}

	public function update($data){
		date_default_timezone_set('asia/jakarta');

		$response = $this->db->update('tbl_parameter', $data, ['id' => $data['id']]);
		return $response;
	}


	public function delete($id){
        $arr = array(
            'id' => $id
        );

		return $this->db->delete('tbl_parameter', $arr);
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */