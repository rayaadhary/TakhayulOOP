<?php

class PostModel
{
  private $table = 'artikel';
  private $db;

  public function __construct()
  {
      $this->db = new Database;
  }
  
    public function getAllArtikel()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        $data = $this->db->resultSet();
        return $data;
    }

    public function getArtikelById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();
        return $data;
    }
}