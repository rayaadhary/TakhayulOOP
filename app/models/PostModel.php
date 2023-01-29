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

    public function tambahDataArtikel($data)
    {
        $query = "INSERT INTO post VALUES ('', :judul, :deskripsi)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}