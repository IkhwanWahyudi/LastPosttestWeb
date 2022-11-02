<?php
    $conn = mysqli_connect("localhost", "root", "", "sepatu");

    if (!$conn) {
        die("Gagal terhubung ke database". mysqli_connect_eror());
    }
?>