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

  public function hasil()
  {
    if (!isset($_POST['jawaban'])) {
      Flasher::setFlash('gagal', 'dikerjakan', 'danger');
      header('Location: ' . BASEURL . '/quiz');
      exit;
    } else {
      Flasher::setFlash('berhasil', 'dikerjakan', 'success');
      $data['judul'] = 'Hasil Quiz';
      $id = $_POST['jawaban'];
      $data['id'] = array_map("intval", $id);
      $data['pertanyaan'] = $this->model('QuizModel')->getAllPertanyaan();
      $data['jawaban'] = $this->model('QuizModel')->getAllJawaban();
      $this->view('template/header', $data);
      $this->view('quiz/hasil', $data);
      $this->view('template/footer');
    }
  }
}
