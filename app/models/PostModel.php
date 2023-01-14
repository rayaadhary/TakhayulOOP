<?php

class PostModel
{
  private $db;
  private $stmt;

  public function __construct()
			{
			$dbhost = 'localhost'; // set the hostname
			$dbname = 'takhayul'; // set the database name
			$dbuser = 'root'; // set the mysql username
      $dbpass = '';  // set the mysql password

			try {
				$this->db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
				$this->db->exec("set names utf8");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->db;
			}
			catch (PDOException $e) {
				return 'Connection failed: ' . $e->getMessage();
			}
    }			
  
    public function getAllArtikel()
    {
        $this->stmt = $this->db->prepare("SELECT * FROM artikel");
        $this->stmt->execute();
        $data = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getArtikelById($id)
    {
        $this->stmt = $this->db->prepare("SELECT * FROM artikel WHERE id = :id");
        $this->stmt->bindParam(':id', $id);
        $this->stmt->execute();
        $data = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}