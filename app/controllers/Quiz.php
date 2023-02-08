<?php
class Quiz extends Controller
{
  public function index()
  {
    $data['judul'] = 'Quiz';
    $data['pertanyaan'] = $this->model('QuizModel')->getAllPertanyaan();
    $data['jawaban'] = $this->model('QuizModel')->getAllJawaban();
    $this->view('template/header', $data);
    $this->view('quiz/index', $data);
    $this->view('template/footer');
  }
}
