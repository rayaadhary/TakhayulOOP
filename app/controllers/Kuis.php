<?php 

class Kuis extends Controller{

    public function index()
    {
        $data['judul'] = 'Kuis';
        // $data['pertanyaan'] = $this->model('KuisModel')->getPertanyaan();
        // $data['jawaban'] = $this->model('KuisModel')->getJawaban($id);
        $this->view('template/headerPost', $data);
        $this->view('kuis/index', $data);
        $this->view('template/footerPost');
    }

    public function hasil()
    {
        $data['judul'] = 'Hasil Kuis';
        $this->view('template/headerPost', $data);
        $this->view('kuis/hasil', $data);
        $this->view('template/footerPost');
    }
}