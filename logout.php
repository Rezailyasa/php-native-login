<?php
session_start();

//logout
//hapus semua session
session_unset();
session_destroy();
//tampilkan sukses logout
$_SESSION['logout'] = 'Berhasil logout.';
header("Location: /login/login.php");
