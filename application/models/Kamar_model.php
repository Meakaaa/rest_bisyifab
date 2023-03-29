<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

    private $_table = "tbl_kamar";

    public $id;
    public $total_kamar;
    public $kamar_tersedia;
    public $kamar_terpakai;

    public function rules()
	{
		return [
            [
                "field" => "total_kamar",
                "label" => "Total Kamar",
                "rules" => "required"
            ],
            [
                "field" => "kamar_tersedia",
                "label" => "Kamar Tersedia",
                "rules" => "required"
            ],
            [
                "field" => "kamar_terpakai",
                "label" => "Kamar Terpakai",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id)
    {
        return $this->db->get_where($this->_table,["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->total_kamar = $post["total_kamar"];
        $this->kamar_tersedia = $post["kamar_tersedia"];
        $this->kamar_terpakai = $post["kamar_terpakai"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->total_kamar = $post["total_kamar"];
        $this->kamar_tersedia = $post["kamar_tersedia"];
        $this->kamar_terpakai = $post["kamar_terpakai"];
        return $this->db->update($this->_table, $this, array('id' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}