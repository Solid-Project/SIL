<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customers extends CI_Model {

	public function select($select = '', $where = ''){
		if ($select != ''){
			$this->db->select($select);
		}
		if ($where != ''){
			$this->db->where($where);
		}
					$this->db->from('tbl_customers');
		$response = $this->db->get();
		return $response;
	}

	public function insert($data){
		date_default_timezone_set('asia/jakarta');
		$arr = array(
			'no_rekam_medis'	=> @$data['no_rekam_medis'],
			'nik'				=> @$data['nik'],
			'nama'				=> @$data['nama'],
			'email'				=> @$data['email'],
			'alamat'			=> $data['alamat'],
			'tempat_lahir'		=> @$data['tempat_lahir'],
			'tanggal_lahir'		=> @$data['tanggal_lahir'],
			'jenis_kelamin'		=> @$data['jenis_kelamin'],
			'no_hp'				=> @$data['no_hp']
		);

		$response = $this->db->insert('tbl_customers', $arr);
		return $response;
	}

	public function update($data){
		date_default_timezone_set('asia/jakarta');

		$response = $this->db->update('tbl_customers', $data, ['id' => $data['id']]);
		return $response;
	}


	public function delete($id){
        $arr = array(
            'id' => $id
        );

		return $this->db->delete('tbl_customers', $arr);
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */