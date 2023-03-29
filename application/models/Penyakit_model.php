<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyakit_model extends CI_Model {

    private $_table = "tbl_penyakit";

    public $id_penyakit;
    public $nama_penyakit;
    public $keterangan;
    public $status;

    public function rules()
	{
		return [
            [
                "field" => "nama_penyakit",
                "label" => "nama_penyakit",
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
                "field" => "waktu",
                "label" => "waktu",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_penyakit)
    {
        return $this->db->get_where($this->_table,["id_penyakit" => $id_penyakit])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_penyakit = $post["id_penyakit"];
        $this->nama_penyakit = $post["nama_penyakit"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->waktu = $post["waktu"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_penyakit = $post["id_penyakit"];
        $this->nama_penyakit = $post["nama_penyakit"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        $this->waktu = $post["waktu"];
        return $this->db->update($this->_table, $this, array('id_penyakit' => $post["id_penyakit"]));
    }

    public function delete($id_penyakit)
    {
        return $this->db->delete($this->_table, array('id_penyakit' => $id_penyakit));
    }
}