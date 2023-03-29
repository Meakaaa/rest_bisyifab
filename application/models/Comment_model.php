<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model {

    private $_table = "tbl_comment";

    public $id_comment;
    public $id_news;
    public $nama;
    public $isi_comment;

    public function rules()
	{
		return [
            [
                "field" => "id_news",
                "label" => "ID News",
                "rules" => "required"
            ],
            [
                "field" => "nama",
                "label" => "Nama",
                "rules" => "required"
            ],
            [
                "field" => "isi_comment",
                "label" => "Isi Comment",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_comment)
    {
        return $this->db->get_where($this->_table,["id_comment" => $id_comment])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_comment = $post["id_comment"];
        $this->id_news = $post["id_news"];
        $this->nama = $post["nama"];
        $this->isi_comment = $post["isi_comment"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_comment = $post["id_comment"];
        $this->id_news = $post["id_news"];
        $this->nama = $post["nama"];
        $this->isi_comment = $post["isi_comment"];
        return $this->db->update($this->_table, $this, array('id_comment' => $post["id_comment"]));
    }

    public function delete($id_comment)
    {
        return $this->db->delete($this->_table, array('id_comment' => $id_comment));
    }
}