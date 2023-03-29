<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news_model extends CI_Model {

    private $_table = "tbl_news";

    public $id_news;
    public $id_kategori;
    public $title;
    public $content;

    public function rules()
	{
		return [
            [
                "field" => "id_kategori",
                "label" => "id_kategori",
                "rules" => "required"
            ],
            [
                "field" => "title",
                "label" => "title",
                "rules" => "required"
            ],
            [
                "field" => "content",
                "label" => "content",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_news)
    {
        return $this->db->get_where($this->_table,["id_news" => $id_news])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->id_kategori = $post["id_kategori"];
        $this->title = $post["title"];
        $this->content = $post["content"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_news = $post["id_news"];
        $this->id_kategori = $post["id_kategori"];
        $this->title = $post["title"];
        $this->content = $post["content"];
        return $this->db->update($this->_table, $this, array('id_news' => $post["id_news"]));
    }

    public function delete($id_news)
    {
        return $this->db->delete($this->_table, array('id_news' => $id_news));
    }
}