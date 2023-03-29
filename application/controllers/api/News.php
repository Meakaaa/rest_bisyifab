<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class News extends REST_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('M_news');
}
  
  public function index_get() 
  {
    $id = $this->get('id_news');
    if ($id === null) {
      $news = $this->M_news->getNews();
    } else {
      $news = $this->M_news->getNews($id);
    }

    if ($news) {
      $this->response(
          $news
        , REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'data' => 'ID Not Found'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_post()
  {
    $data = [
      'id_kategori' => $this->post('id_kategori'),
      'title' => $this->post('title'),
      'content' => $this->post('content'),
    ];

    if ($this->M_news->createNews($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'New News has been Created'
      ], REST_Controller::HTTP_CREATED);
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Create New Data'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }
  
  public function index_put()
  {
    $data = [
      'id_kategori' => $this->put('id_kategori'),
      'title' => $this->put('title'),
      'content' => $this->put('content'),
    ];

    if ($this->M_news->updateNews($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'Kamar has been Updated'
      ], REST_Controller::HTTP_NO_CONTENT);
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Update Data'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }

  public function index_delete() 
  {
    $id = $this->delete('id_news');

    if ($id === null) {
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if ($this->M_news->deleteNews($id) > 0) {
        $this->response([
          'status' => true,
          'id_news' => $id,
          'message' => 'Deleted'
        ], REST_Controller::HTTP_NO_CONTENT);
      } else {
        $this->response([
          'status' => false,
          'data' => 'ID Not Found'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }
}
