<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Page extends REST_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('M_page', 'page');
}
  
public function index_get() 
  {
    $id = $this->get('id_page');
    if ($id === null) {
      $page = $this->page->getPage();
    } else {
      $page = $this->page->getPage($id);
    }

    if ($page) {
      $this->response([
        'status' => true,
        'data' => $page
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'data' => 'ID Not Found'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_delete() 
  {
    $id = $this->delete('id_page');

    if ($id === null) {
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if ($this->page->deletePage($id) > 0) {
        $this->response([
          'status' => true,
          'id_page' => $id,
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

  public function index_post()
  {
    $data = [
      'id_parent' => $this->post('id_parent'),
      'id_user' => $this->post('id_user'),
      'title' => $this->post('title'),
      'content' => $this->post('content'),
      'url' => $this->post('url'),
    ];

    if ($this->page->createPage($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'New Page has been Created'
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
    $id = $this->put('id_page');
    $data = [
      'id_parent' => $this->put('id_parent'),
      'id_user' => $this->put('id_user'),
      'title' => $this->put('title'),
      'content' => $this->put('content'),
      'url' => $this->put('url'),
    ];

    if ($this->page->updatePage($data, $id) > 0) {
      $this->response([
        'status' => true,
        'data' => 'Page has been Updated'
      ], REST_Controller::HTTP_NO_CONTENT);
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Update Data'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }
}
