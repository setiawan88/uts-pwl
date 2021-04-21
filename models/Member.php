<?php
class Member {
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // login (formLogin.php)
    public function cekLogin($data) {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";
        $gather = $this->koneksi->prepare($sql);
        $gather->execute($data);
        $result = $gather->fetch();
        return $result;
    }

}