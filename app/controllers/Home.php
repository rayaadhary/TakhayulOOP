<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $postsPerPage = 6;
    $start = ($currentPage - 1) * $postsPerPage;
    $data['artikel'] = $this->model('PostModel')->getAllArtikel($start, $postsPerPage);
    $data['total'] = $this->model('PostModel')->getTotalArtikel();
    $data['pages'] = ceil($data['total'] / $postsPerPage);
    $data['currentPage'] = $currentPage;
    $data['postsPerPage'] = $postsPerPage;
    $this->view('template/header', $data);
    $this->view('home/index', $data);
    $this->view('template/footer');
  }
}
