<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $_table = "tbl_pasien";

    public $no_pasien;
    public $nama_pasien;
    public $tanggal_lahir;
    public $umur;
    public $jk;
    public $alamat;
    public $no_telepon;

    public function rules()
	{
		return [
            [
                "field" => "nama_pasien",
                "label" => "Nama Pasien",
                "rules" => "required"
            ],
            [
                "field" => "tanggal_lahir",
                "label" => "Tanggal Lahir",
                "rules" => "required"
            ],
            [
                "field" => "umur",
                "label" => "Umur",
                "rules" => "required"
            ],
            [
                "field" => "jk",
                "label" => "JK",
                "rules" => "required"
            ],
            [
                "field" => "alamat",
                "label" => "Alamat",
                "rules" => "required"
            ],
            [
                "field" => "no_telepon",
                "label" => "NO Telepon",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($no_pasien)
    {
        return $this->db->get_where($this->_table,["no_pasien" => $no_pasien])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->nama_pasien = $post["nama_pasien"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->umur = $post["umur"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["no_pasien"];
        $this->nama_pasien = $post["nama_pasien"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->umur = $post["umur"];
        $this->jk = $post["jk"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        return $this->db->update($this->_table, $this, array('no_pasien' => $post["no_pasien"]));
    }

    public function delete($no_pasien)
    {
        return $this->db->delete($this->_table, array('no_pasien' => $no_pasien));
    }
}