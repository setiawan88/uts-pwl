<?php
session_start();

unset($_SESSION['MEMBER']);

header('Location: http://localhost/UTSPWL/index.php?page=views/menu_page/home');
