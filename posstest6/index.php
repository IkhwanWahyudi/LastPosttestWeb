<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en" data-color-mode=" ">
    <head>
        <link rel="shortcut icon" href="Foto/shoes.ico">
        <title> Website Penjualan Sepatu </title>
        <link rel="stylesheet" href="style.css">
        <script>
            alert("Selamat Datang di Website Kami! Selamat Berbelanja!");
        </script>
        </style>
    </head>
    <?php include("body.php") ?>
</html>