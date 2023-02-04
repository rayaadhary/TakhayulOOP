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
        // session_start();
        if ($_SESSION['login'] != true) {
            header('Location: ' . BASEURL . '/login');
            exit;
        } else {
            $data['judul'] = 'Administrator';
            $data['artikel'] = $this->model('PostModel')->getAllArtikel();
            $this->view('template/headerAdmin', $data);
            $this->view('login/admin', $data);
            $this->view('template/footer');
        }
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pengguna = $this->model('LoginModel')->cekDataLogin($username, $password);
        if ($pengguna) {
            Flasher::setFlash('berhasil', 'login', 'success');
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $pengguna['nama'];
            header('Location: ' . BASEURL . '/login/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'login', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
        exit;
    }

    public function lupaPassword()
    {
        $data['judul'] = 'Lupa Password';
        $this->view('template/header', $data);
        $this->view('login/lupaPassword', $data);
        $this->view('template/footer');
    }

    public function passwordBaru()
    {
        $usernameBaru = $_POST['usernameBaru'];
        $passwordBaru = $_POST['passwordBaru'];
        $konfirmasiPassword = $_POST['konfirmasiPassword'];
        if ($passwordBaru == $konfirmasiPassword) {
            if ($this->model('LoginModel')->ubahPassword($usernameBaru, $passwordBaru) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/login');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL . '/login/lupaPassword');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/login/lupaPassword');
            exit;
        }
    }
}
