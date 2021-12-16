<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function getDataProperty()
		{
			return $this->db->get('property') -> result_array();
		}	

	public function getDataPropertyBy($location, $status, $type, $bathQTY)
	{			
		if ($location != '' || $status != '' || $type != '' || $bathQTY != '') {
			$this->db->where('location_properti', $location);		
			$this->db->where('jenis_status', $status);					
		}
	}
	public function inputQR($nama, $kode, $image_name)
	{		
		$data = array(
			'nama_member' => $nama,
			'kode_pasien' => $kode,
			'gambar'	  => $image_name,
		);
		$this->db->insert('qrcode', $data);
	}
	public function getData()
	{
		$this->db->order_by('id_QR', 'desc');
		return $this->db->get('qrcode')->result_array();
	}

	public function getDatabyID($id)
	{
		$this->db->where('id_QR', $id);
		return $this->db->get('qrcode')->result_array();
	}

	public function cekkode($kode)
	{
		$this->db->where('kode_pasien', $kode);
		return $this->db->get('qrcode')->result_array();
	}
}

/* End of file home_m.php */
/* Location: ./application/models/home_m.php */