<?php

class UserModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekDataLogin($username, $password)
    {
        $this->db->query('SELECT * FROM pengguna WHERE username=:username AND password=:password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $data = $this->db->single();
        // $hash = $row['password'];
        // if (password_verify($data['password'], $hash)) {
        //     return $this->db->rowCount();
        // }  
        return $data;
    }

    public function ubahPassword($usernameBaru, $passwordBaru)
    {
        $this->db->query('UPDATE pengguna SET password=:password WHERE username=:username');
        $this->db->bind('username', $usernameBaru);
        $this->db->bind('password', $passwordBaru);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
