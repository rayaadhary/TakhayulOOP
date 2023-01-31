<?php

class Post extends Controller
{
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
    $data['judul'] = 'Detail Artikel';
    $data['id'] = $id;
    $data['artikel'] = $this->model('PostModel')->getArtikelById($id);
    $this->view('template/headerPost', $data);
    $this->view('post/detail', $data);
    $this->view('template/footerPost', $data);
  }

  public function formTambah()
  {
    $data['judul'] = 'Form Tambah';
    $this->view('template/headerPost', $data);
    $this->view('post/formTambah', $data);
    $this->view('template/footerPost', $data);
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
}
