<?php
session_start();
require 'koneksi.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];

    $result = mysqli_query($conn, "SELECT * FROM pembelian_sepatu WHERE Nama LIKE '%$keyword%'
    OR Email LIKE '%$keyword%' OR Ukuran LIKE '%$keyword%' OR Barang LIKE '%$keyword%' 
    OR Jumlah LIKE '%$keyword%' OR Alamat LIKE '%$keyword%' OR Metode LIKE '%$keyword%'
    OR Waktu LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM pembelian_sepatu");
}
    $sepatu = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $sepatu[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="Foto/shoes.ico">
        <title> Website Penjualan Sepatu </title>
        <link rel="stylesheet" href="styleformulir.css">
        </style>
    </head>
    <body>
        <header class="head">
            <nav>
                <a> <img src="Foto/shoes.png"> </a>
                <div class="nav-links" align="center"> </div>
                <ul>
                    <li> <a href="index.php"> HOME </a> </li>
                    <li id="beli"> <a href = "buy.php"> BUY </a> </li>
                    <li> <a href="formbuy.php"> CHART </a> </li>
                    <li> <a href="faqs.php"> FAQs </a> </li>
                    <li> <a href="tentang.php"> ABOUT ME </a> </li>
                    <li> <a href="logout.php"> LOGOUT </a> </li>
                </ul>
            </nav>
        </header>
        <div class="text-box">
            <h1 id="tema"> Website Penjualan Sepatu </h1>
            <p> Website Online Shop Terpercaya Sejak Dahulu Kala<br/>Beli Sepatu Impian Anda di Website Kami!
            <br> <br></p>
        </div>
            <button>Dark Mode</button>
        </div>
        <button><a href="buy.php" style="text-decoration: none; color: white;">BUY</a></button>
        <table border="0">
            <tr class="judul">
                <td colspan="11" align="center">
                    <strong>
                        <font size="5"> 
                        <h1 align="center"> Struk Pembelian! </h1>
                            <br> <hr color="black">
                        </font>
                    </strong>
                    <form action="" method="get">
                        <tr>
                            <td colspan="10" align="right"><input type="text" name="keyword"></td>
                            <td><button type="submit" name="cari">Search</button></td>
                        </tr>
                    </form>
                </td>
            </tr>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>E-mail</td>
                <td>Ukuran</td>
                <td>Barang</td>
                <td>Jumlah</td>
                <td>Alamat</td>
                <td>Metode Pembayaran</td>
                <td>Bukti Pembayaran</td>
                <td>Waktu</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($sepatu as $psn): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $psn["Nama"]; ?> </td>
                <td> <?php echo $psn["Email"]; ?> </td>
                <td> <?php echo $psn["Ukuran"]; ?> </td>
                <td> <?php echo $psn["Barang"]; ?> </td>
                <td> <?php echo $psn["Jumlah"]; ?> </td>
                <td> <?php echo $psn["Alamat"]; ?> </td>
                <td> <?php echo $psn["Metode"]; ?> </td>
                <td> <img style="height:90px; width:80px;" src="Foto/bukti_pembayaran/<?=$psn['Nama_file']?>"> </td>
                <td> <?=$psn['Waktu'] ?> </td>
                <td> <a href="ubah.php?Nomor=<?php echo $psn['Nomor']; ?>" style="text-decoration: none; color: black;"><strong>Edit</strong></a> | 
                <a href="hapus.php?Nomor=<?php echo $psn['Nomor']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" style="text-decoration: none; color: black;"><strong>Hapus</strong></a> </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
        <script src="script.js"></script>
        <!-- footer -->
        <footer class="foot1">
            <div class="icon" align="center">
                <i> <img src="Foto/whatsapp.png"> 0896 9382 7183 &emsp; </i>
                <i> <img src="Foto/instagram.png"> ikhwan_whydi &emsp; </i>
                <i> <img src="Foto/email.png"> ikhwanw06@gmail.com &emsp; </i>
            </div>
            <p align="center"> <br> @Copyright 2022 - Ikhwan - Made with HTML - CSS </p>
        </footer>
    </body>
</html>