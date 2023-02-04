<?php

class LoginModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekDataLogin($data)
    {
        $this->db->query('SELECT * FROM pengguna WHERE username=:username AND password=:password');
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $data = $this->db->single();
        // $hash = $row['password'];
        // if (password_verify($data['password'], $hash)) {
        //     return $this->db->rowCount();
        // }
        return $this->db->rowCount();
    }
}
