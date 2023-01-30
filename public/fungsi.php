<?php
include "koneksi.php";


class Artikel extends Koneksi
{

	protected $db;
	public function __construct()
	{
		$this->db = parent::__construct();
	}


	public function ambilData($db, $query)
	{
		$data = $query->fetch();
		return $data;
	}

	function bisa($db, $query)
	{
		$db = mysqli_query($db, $query);

		if ($db) {
			return 1;
		} else {
			return 0;
		}
	}

	public function tampil()
	{
		$query = $this->db->prepare("SELECT * FROM artikel");
		$query->execute();
		$data = $query->fetchAll();
		return $data;
	}

	public function detailArtikel($id)
	{
		$query = $this->db->prepare("SELECT * FROM artikel where id=?");
		$query->bindParam(1, $id);
		$query->execute();
		return $query->fetch();
	}
}
