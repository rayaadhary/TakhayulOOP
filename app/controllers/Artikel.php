<?php

class Artikel extends Controller
{
  // public function index()
  // {
  //   $data['judul'] = 'Artikel';
  //   $data['artikel'] = $this->model('PostModel')->getAllArtikel();
  //   $this->view('template/header', $data);
  //   $this->view('post/index', $data);
  //   $this->view('template/footer');
  // }

  public function index($i = null)
  {
    $data['judul'] = 'Artikel';
    $currentPage = isset($i) ? (int)$i : 1;
    $postsPerPage = 6;
    $start = ($currentPage - 1) * $postsPerPage;
    $data['artikel'] = $this->model('ArtikelModel')->getAllArtikel($start, $postsPerPage);
    $data['total'] = $this->model('ArtikelModel')->getTotalArtikel();
    $data['pages'] = ceil($data['total'] / $postsPerPage);
    $data['currentPage'] = $currentPage;
    $data['postsPerPage'] = $postsPerPage;
    $this->view('template/header', $data);
    $this->view('artikel/index', $data);
    $this->view('template/footer');
  }

  public function detailArtikel($id)
  {
    $data['judul'] = 'Detail Artikel';
    $data['artikel'] = $this->model('ArtikelModel')->getArtikelById($id);
    $this->view('template/header', $data);
    $this->view('artikel/detailArtikel', $data);
    $this->view('template/footer', $data);
  }

  public function formTambahArtikel()
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      $data['judul'] = 'Form Tambah';
      $this->view('template/header', $data);
      $this->view('artikel/formTambahArtikel', $data);
      $this->view('template/footer', $data);
    }
  }

  public function tambahArtikel()
  {
    if ($this->model('ArtikelModel')->tambahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    }
  }

  public function formUbahArtikel($id)
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      $data['judul'] = 'Form Ubah';
      $data['artikel'] = $this->model('ArtikelModel')->getArtikelById($id);
      $this->view('template/header', $data);
      $this->view('artikel/formUbahArtikel', $data);
      $this->view('template/footer', $data);
    }
  }

  public function ubahArtikel()
  {
    if ($this->model('ArtikelModel')->ubahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    }
  }

  public function hapusArtikel($id)
  {
    $hapus = $this->model('ArtikelModel')->hapusDataArtikel($id);
    if (!$hapus) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    }
  }
}
