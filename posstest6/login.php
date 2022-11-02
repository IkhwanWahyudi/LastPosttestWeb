<?php
    session_start();
    require 'koneksi.php';

    if (isset($_SESSION['login'])) {
        header("Location: index.php");
        exit;
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <center>
            <hr color="black">
            <h1>Login</h1>
            <a> <img src="Foto/shoes.png" width="90px"> </a>
            <p>Website Penjualan Sepatu</p>
            <hr color="black">
        </center>
        <?php
            if (isset($error)) {
                echo "<p style='color: red'> Username atau password salah! </p>";
            }
        ?>
        <form action="" method="post">
            <label for="">Username : </label>
            <input type="text" name="username"> <br> <br>
            <label for="">Password : </label>
            <input type="password" name="password"> <br> <br>
            <hr color="black">
            <center>
                <input type="submit" value ="Login" name="login"> <br>
                <hr color="black">
                <a href="regis.php" style="text-decoration: none; color: black;">Belum punya akun?</a>
            </center>
            <hr color="black">
        </form>
    </div>
    
</body>
</html>