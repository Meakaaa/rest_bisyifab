<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model {

    private $_table = "tbl_kategori";

    public $id_kategori;
    public $nama_kategori;

    public function rules()
	{
		return [
            [
                "field" => "nama_kategori",
                "label" => "Nama Kategori",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_kategori)
    {
        return $this->db->get_where($this->_table,["id_kategori" => $id_kategori])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->nama_kategori = $post["nama_kategori"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];
        return $this->db->update($this->_table, $this, array('id_kategori' => $post["id_kategori"]));
    }

    public function delete($id_kategori)
    {
        return $this->db->delete($this->_table, array('id_kategori' => $id_kategori));
    }
}