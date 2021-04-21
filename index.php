<?php
session_start();
global $member;
global $role;

require_once 'koneksi.php';

include_once 'views/header.php';
include_once 'views/menu.php';
include_once 'main.php';
include_once 'views/sidebar.php';
include_once 'views/footer.php';
?>