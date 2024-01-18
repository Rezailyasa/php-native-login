<?php

session_start();

include "koneksi.php";

//dapatkan data user dari form
$user = [
    'id' => $_GET['id'],
    'username' => $_POST['username'],
    'nama' => $_POST['nama'],
];

//check apakah user dengan username tersebut ada di table users
// $query = "update  from users where username = ? limit 1";
$query = "UPDATE `users` SET `username`= ?, `nama`=? WHERE `id`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('sss', $user['username'], $user['nama'], $user['id']);

$stmt->execute();

// $result = $stmt->get_result();

// if ($result) {
header("Location: index.php");
$_SESSION['message'] = 'Berhasil mengubah data.';
// } else {
//     $_SESSION['error'] = 'Gagal mengubah data.';
//     // header("Location: login.php");
// }
