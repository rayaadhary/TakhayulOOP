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
        $this->db->query('SELECT * FROM ' . $this->table);
        $data = $this->db->resultSet();
        return $data;
    }

    public function getArtikelById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();
        return $data;
    }

    public function tambahDataArtikel($data)
    {
        $gambar = $this->upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO artikel VALUES ('', :judul, :deskripsi, :gambar)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function upload()
    {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('yang anda upload bukan gambar');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 5242880) {
            echo "<script>
                    alert('ukuran gambar terlalu besar');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }
}
