<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekapmedis_model extends CI_Model {

    private $_table = "tbl_rekapmedis";

    public $kode_rekapmedis;
    public $id_penyakit;
    public $keterangan;
    public $status;
    public $tanggal;
    public $id_dokter;
    public $no_pasien;

    public function rules()
	{
		return [
            [
                "field" => "id_penyakit",
                "label" => "id_penyakit",
                "rules" => "required"
            ],
            [
                "field" => "keterangan",
                "label" => "keterangan",
                "rules" => "required"
            ],
            [
                "field" => "status",
                "label" => "status",
                "rules" => "required"
            ],
            [
                "field" => "tanggal",
                "label" => "tanggal",
                "rules" => "required"
            ],
            [
                "field" => "id_dokter",
                "label" => "id_dokter",
                "rules" => "required"
            ],
            [
                "field" => "no_pasien",
                "label" => "no_pasien",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($kode_rekapmedis)
    {
        return $this->db->get_where($this->_table,["kode_rekapmedis" => $kode_rekapmedis])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->id_penyakit = $post["id_penyakit"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->tanggal = $post["tanggal"];
        $this->id_dokter = $post["id_dokter"];
        $this->no_pasien = $post["no_pasien"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_rekapmedis = $post["kode_rekapmedis"];
        $this->id_penyakit = $post["id_penyakit"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->tanggal = $post["tanggal"];
        $this->id_dokter = $post["id_dokter"];
        $this->no_pasien = $post["no_pasien"];
        return $this->db->update($this->_table, $this, array('kode_rekapmedis' => $post["kode_rekapmedis"]));
    }

    public function delete($kode_rekapmedis)
    {
        return $this->db->delete($this->_table, array('kode_rekapmedis' => $kode_rekapmedis));
    }
}