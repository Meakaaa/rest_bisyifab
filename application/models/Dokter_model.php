<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter_model extends CI_Model {

    private $_table = "tbl_dokter";

    public $id_dokter;
    public $nama_dokter;
    public $alamat;
    public $no_telepon;

    public function rules()
	{
		return [
            [
                "field" => "nama_dokter",
                "label" => "nama_dokter",
                "rules" => "required"
            ],
            [
                "field" => "alamat",
                "label" => "alamat",
                "rules" => "required"
            ],
            [
                "field" => "no_telepon",
                "label" => "no_telepon",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_dokter)
    {
        return $this->db->get_where($this->_table,["id_dokter" => $id_dokter])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_dokter = $post["id_dokter"];
        $this->nama_dokter = $post["nama_dokter"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_dokter = $post["id_dokter"];
        $this->nama_dokter = $post["nama_dokter"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->update($this->_table, $this, array('id_dokter' => $post["id_dokter"]));
    }

    public function delete($id_dokter)
    {
        return $this->db->delete($this->_table, array('id_dokter' => $id_dokter));
    }
}