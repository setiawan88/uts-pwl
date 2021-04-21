<?php
session_start();
require_once '../koneksi.php';
require_once '../models/Member.php';

$uname = $_POST['username'];
$password = $_POST['password'];

$listData = [$uname,$password];

$obj = new Member();
$login = $obj->cekLogin($listData);

if(!empty($login)) {
    $_SESSION['MEMBER'] = $login;
    header('Location: http://localhost/UTSPWL/index.php?page=dataPegawai');
} else {
    header('Location: http://localhost/UTSPWL/index.php?page=gagalLogin');
}