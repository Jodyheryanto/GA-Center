<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPhone extends CI_Model
{

    public function printPhone()
    {
        $query = $this->db->query(
            "SELECT * 
            FROM ePhone
            LIMIT 5"
        );

        return $query->result_array();
    }

    public function printPhoneId($id)
    {
        $query = $this->db->query(
            "SELECT * 
            FROM ePhone
            WHERE ID = $id"
        );

        return $query->result_array();
    }

    public function saveData(){
        $name	= $this->input->post('name');
		$position	= $this->input->post('position');
		$ext	= $this->input->post('ext');
		$phoneno	= $this->input->post('phone');
		$status	= 1;
		$data_phone = [
			'Name' => $name,
			'Position' => $position,
			'Ext' => $ext,
			'PhoneNo' => $phoneno,
			'Status' => $status
        ];
        $this->db->insert('ePhone', $data_phone);
    }

    public function DelData($id)
    {
        //  $this->db->where('nim', $nim);
        $this->db->delete('ePhone', ['id' => $id]);
    }

    public function ChangeData($id)
    {
        $data = [
            "Name" => $this->input->post('name'),
            "Position" => $this->input->post('position'),
            "Ext" => $this->input->post('ext'),
            "PhoneNo" => $this->input->post('phone')
        ];
        $this->db->where('id', $id);
        $this->db->update('ePhone', $data);
    }
}