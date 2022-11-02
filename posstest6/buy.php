<?php
require 'koneksi.php';
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST['tambah'])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $ukuran = htmlspecialchars($_POST["ukuran"]);
    $barang = htmlspecialchars($_POST["barang"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $pembayaran = htmlspecialchars($_POST["pembayaran"]);
    $waktu = date("Y-m-d H-i-s");

    $foto = $_FILES['gambar']['name'];
    $unique = uniqid();
    $x = explode('.', $foto);
    $extensi = strtolower(end($x));
    $gambar_baru = "$unique.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO pembelian_sepatu values('', '$nama', '$email', '$ukuran', '$barang', '$jumlah', '$alamat', '$pembayaran', '$gambar_baru', '$waktu')";
    $result = mysqli_query($conn, $sql);
    
    if ( $result ) {
        echo "
        <script>
            alert('Data berhasil ditambah');
            document.location.href = 'formbuy.php';
        </script>  
        ";
        move_uploaded_file($tmp, 'Foto/bukti_pembayaran/'.$gambar_baru);
    } else {
        echo "
        <script>
            alert('Data gagal ditambah');
            document.location.href = 'tambah.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="Foto/shoes.ico">
        <title> Website Penjualan Sepatu </title>
        <link rel="stylesheet" href="stylebuy.css">
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
            </p>
        </div>
        <button>Dark Mode</button>
        <div align="center" class="formulir">
            <form action="" method="post" enctype="multipart/form-data">
                <table border="0" width="80%">
                    <tr class="judul">
                        <td colspan="4" align="center">
                            <strong>
                                <font size="5"> 
                                    <p>Order Sepatu!</p> 
                                    <hr color="black"> 
                                </font>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td> <br> <label for="nama">Nama Customer</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="text" maxlength="100" name="nama" size="50" placeholder="Nama Lengkap" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> <label for="email">Email</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="email" name="email" placeholder="Alamat Email" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> <label for="ukuran">Ukuran Sepatu</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="number" name="ukuran" min="30" max="50"></td>
                    </tr>
                    <tr>
                        <td> <br> <label for="barang">Barang</label></td>
                        <td> <br> : </td>
                        <td> <br> <select name="barang" required="">
                            <option></option>
                            <option value="AeroStreet">AeroStreet</option>
                            <option value="Nike">Nike</option>
                            <option value="Converse">Converse</option>
                            <option value="Vans">Vans</option>
                            <option value="Reebok">Reebok</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> <br> <label for="jumlah">Jumlah Pembelian</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="number" name="jumlah" min="1"></td>
                    </tr>
                    <tr>
                        <td> <br> <label for="alamat">Alamat</label></td>
                        <td> <br> : </td>
                        <td> <br> <textarea name="alamat" placeholder="Alamat Penerima" required=""></textarea></td>
                    </tr>
                    <tr>
                        <td> <label for="pembayaran">Metode Pembayaran</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="radio" name="pembayaran" value="Credit" required=""> Credit &emsp;
                        <input type="radio" name="pembayaran" value="Cash" required="">Cash</td>
                    </tr>
                    <tr>
                        <td> <br> <label for="">Bukti Pembayaran</label></td>
                        <td> <br> : </td>
                        <td> <br> <input type="file" name="gambar" id="gambar"></td>
                    </tr>
                    <tr>
                        <td colspan="4"> <br> <hr color="black"> <br> </td>
                    </tr>
                </table>
                <div class="submit">
                    <button type="submit" name="tambah">Tambah</button> &emsp; <button type="reset" name="batal">Batal</button>
                </div>
            </form>
        </div>
        <script src="script.js"> </script>
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