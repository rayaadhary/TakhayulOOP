<?php

class KuisModel
{
  // private $table1 = 'pertanyaan';
  // private $table2 = 'jawaban';
  private $db;

  public function __construct()
  {
      $this->db = new Database;
  }
  
    public function getPertanyaan()
    {
        $query = "SELECT * FROM pertanyaan ORDER BY rand() LIMIT 50";
        $this->db->query($query);
        $data = $this->db->single();
        return $data;
    }

      public function getJawaban($id)
    {
        $query = "SELECT * FROM jawaban WHERE id_pertanyaan = :id_pertanyaan ORDER BY rand()";
        $this->db->query($query);
        $this->db->bind('id_pertanyaan', $id);
        $data = $this->db->single();
        return $data;
    }
}