<?php

class Post extends Controller
{
  // public function index()
  // {
  //   $data['judul'] = 'Artikel';
  //   $data['artikel'] = $this->model('PostModel')->getAllArtikel();
  //   $this->view('template/header', $data);
  //   $this->view('post/index', $data);
  //   $this->view('template/footer');
  // }

  public function index()
  {
    $data['judul'] = 'Artikel';
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $postsPerPage = 6;
    $start = ($currentPage - 1) * $postsPerPage;
    $data['artikel'] = $this->model('PostModel')->getAllArtikel($start, $postsPerPage);
    $data['total'] = $this->model('PostModel')->getTotalArtikel();
    $data['pages'] = ceil($data['total'] / $postsPerPage);
    $data['currentPage'] = $currentPage;
    $data['postsPerPage'] = $postsPerPage;
    $this->view('template/header', $data);
    $this->view('post/index', $data);
    $this->view('template/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Artikel';
    $data['artikel'] = $this->model('PostModel')->getArtikelById($id);
    $this->view('template/header', $data);
    $this->view('post/detail', $data);
    $this->view('template/footer', $data);
  }

  public function formTambah()
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      $data['judul'] = 'Form Tambah';
      $this->view('template/header', $data);
      $this->view('post/formTambah', $data);
      $this->view('template/footer', $data);
    }
  }

  public function tambah()
  {
    if ($this->model('PostModel')->tambahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/post');
      exit;
    }
  }

  public function formUbah($id)
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      $data['judul'] = 'Form Ubah';
      $data['artikel'] = $this->model('PostModel')->getArtikelById($id);
      $this->view('template/header', $data);
      $this->view('post/formUbah', $data);
      $this->view('template/footer', $data);
    }
  }

  public function ubah()
  {
    if ($this->model('PostModel')->ubahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/post');
      exit;
    }
  }

  public function hapus($id)
  {
    $hapus = $this->model('PostModel')->hapusDataArtikel($id);
    if (!$hapus) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/post');
      exit;
    }
  }
}
