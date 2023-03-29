<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_model extends CI_Model {

    private $_table = "tbl_page";

    public $id_page;
    public $id_parent;
    public $id_user;
    public $title;
    public $content;
    public $url;
    public $tgl_create;
    public $tgl_update;

    public function rules()
	{
		return [
            [
                "field" => "id_parent",
                "label" => "ID Parent",
                "rules" => "required"
            ],
            [
                "field" => "id_user",
                "label" => "ID User",
                "rules" => "required"
            ],
            [
                "field" => "title",
                "label" => "Title",
                "rules" => "required"
            ],
            [
                "field" => "content",
                "label" => "Content",
                "rules" => "required"
            ],
            [
                "field" => "url",
                "label" => "URL",
                "rules" => "required"
            ],
            [
                "field" => "tgl_create",
                "label" => "TGL Create",
                "rules" => "required"
            ],
            [
                "field" => "tgl_update",
                "label" => "TGL Update",
                "rules" => "required"
            ],
        ];
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }   

    public function getID($id_page)
    {
        return $this->db->get_where($this->_table,["id_page" => $id_page])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = $post["id"];
        $this->id_parent = $post["id_parent"];
        $this->id_user = $post["id_user"];
        $this->title = $post["title"];
        $this->id_parent = $post["content"];
        $this->id_user = $post["url"];
        $this->title = $post["tgl_create"];
        $this->title = $post["tgl_update"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_page = $post["id_page"];
        $this->id_parent = $post["id_parent"];
        $this->id_user = $post["id_user"];
        $this->title = $post["title"];
        $this->content = $post["content"];
        $this->url = $post["url"];
        $this->tgl_create = $post["tgl_create"];
        $this->tgl_update = $post["tgl_update"];
        return $this->db->update($this->_table, $this, array('id_page' => $post["id_page"]));
    }

    public function delete($id_page)
    {
        return $this->db->delete($this->_table, array('id_page' => $id_page));
    }
}