<?php

session_start();

include "koneksi.php";
$query = "DELETE FROM `users` WHERE `id`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $_GET['id']);

$stmt->execute();

// $result = $stmt->get_result();

// if ($result) {
header("Location: index.php");
$_SESSION['message'] = 'Berhasil mengubah data.';
