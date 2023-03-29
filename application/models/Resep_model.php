<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resep_model extends CI_Model {

    private $_table = "tbl_resep";

    public $kode_resep;
    public $kode_rekapmedis;
    public $kode_obat;
    public $jumlah;
    public $keterangan;

    public function rules()
	{
		return [
            [
                "field" => "kode_rekapmedis",
                "label" => "kode_rekapmedis",
                "rules" => "required"
            ],
            [
                "field" => "kode_obat",
                "label" => "kode_obat",
                "rules" => "required"
            ],
            [
                "field" => "jumlah",
                "label" => "jumlah",
                "rules" => "required"
            ],
            [
                "field" => "keterangan",
                "label" => "Keterangan",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($kode_resep)
    {
        return $this->db->get_where($this->_table,["kode_resep" => $kode_resep])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->kode_rekapmedis = $post["kode_rekapmedis"];
        $this->kode_obat = $post["kode_obat"];
        $this->jumlah = $post["jumlah"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_resep = $post["kode_resep"];
        $this->kode_rekapmedis = $post["kode_rekapmedis"];
        $this->kode_obat = $post["kode_obat"];
        $this->jumlah = $post["jumlah"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('kode_resep' => $post["kode_resep"]));
    }

    public function delete($kode_resep)
    {
        return $this->db->delete($this->_table, array('kode_resep' => $kode_resep));
    }
}