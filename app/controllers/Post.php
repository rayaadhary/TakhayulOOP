<?php

class Post extends Controller{
  public function index()
  {
    $data['judul'] = 'Artikel';
    $data['artikel'] = $this->model('PostModel')->getAllArtikel();
    $this->view('template/header', $data);
    $this->view('post/index', $data);
    $this->view('template/footer');
  }

  public function detail($id)
  {
    $data['id'] = $id;
    $this->view('post/detail', $data);
  }
}