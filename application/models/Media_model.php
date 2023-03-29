<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class media_model extends CI_Model {

    private $_table = "tbl_media";

    public $id_media;
    public $id_news;
    public $title;
    public $url;

    public function rules()
	{
		return [
            [
                "field" => "id_news",
                "label" => "ID News",
                "rules" => "required"
            ],
            [
                "field" => "title",
                "label" => "Title",
                "rules" => "required"
            ],
            [
                "field" => "url",
                "label" => "URL",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_media)
    {
        return $this->db->get_where($this->_table,["id_media" => $id_media])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->id_news = $post["id_news"];
        $this->title = $post["title"];
        $this->url = $post["url"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_media = $post["id_media"];
        $this->id_news = $post["id_news"];
        $this->title = $post["title"];
        $this->url = $post["url"];
        return $this->db->update($this->_table, $this, array('id_media' => $post["id_media"]));
    }

    public function delete($id_media)
    {
        return $this->db->delete($this->_table, array('id_media' => $id_media));
    }
}