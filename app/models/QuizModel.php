<?php
class QuizModel
{
  private $table = 'pertanyaan';
  private $table1 = 'jawaban';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPertanyaan()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    $data = $this->db->resultSet();
    return $data;
  }

  public function getAllJawaban()
  {
    $this->db->query('SELECT * FROM ' . $this->table1);
    $data = $this->db->resultSet();
    return $data;
  }
}
