<?php

require 'koneksi.php';
if (isset($_POST['regis'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('Username telah digunakan kreatif brooo!');
                    location.href = 'regis.php';
                </script>
            ";
        } else {
            $sql = "INSERT INTO user VALUES (' ', '$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) > 0) {
                echo "
                    <script>
                        alert('Registrasi Berhasil!');
                        location.href = 'login.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Registrasi Gagal!');
                        location.href = 'regis.php';
                    </script>
                ";
            }
        }
    } else {
        echo "
            <script>
                alert('Password anda salah!');
                location.href = 'regis.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <center>
            <hr color="black">
            <h3>Registrasi</h3>
            <hr color="black">
            <a> <img src="Foto/shoes.png" width="90px"> </a>
            <p>Website Penjualan Sepatu</p>
            <hr color="black">
        </center>
        <form action="" method="post">
            <label for="">Username :</label>
            <input type="text" name="username" id=""> <br><br>
            <label for="">Password :</label>
            <input type="password" name="password" id=""> <br><br>
            <label for="">Confirm Password :</label>
            <input type="password" name="cpassword" id=""> <br><br>
            <center>
                <hr color="black">
                <input type="submit" name="regis" value="Registrasi">
                <hr color="black">
            </center>
        </form>
    </div>
    
</body>
</html>