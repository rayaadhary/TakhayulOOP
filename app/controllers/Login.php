<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }

    public function admin()
    {
        $data['judul'] = 'Administrator';
        $data['artikel'] = $this->model('PostModel')->getAllArtikel();
        $this->view('template/headerAdmin', $data);
        $this->view('login/admin', $data);
        $this->view('template/footer');
    }

    public function login()
    {
        if ($this->model('LoginModel')->cekDataLogin($_POST) > 0) {
            Flasher::setFlash('berhasil', 'login', 'success');
            header('Location: ' . BASEURL . '/login/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'login', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function lupaPassword()
    {
        $data['judul'] = 'Lupa Password';
        $this->view('template/header', $data);
        $this->view('login/lupaPassword', $data);
        $this->view('template/footer');
    }
}
