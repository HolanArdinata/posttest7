<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_username = "SELECT * FROM regis WHERE username = '$username'";
    $result = mysqli_query($conn, $cek_username);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;

            echo "<script>
                alert('!Selamat Datang ADMIN!');
                document.location.href = 'loginadmin.php';
            </script>";
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
    <link rel="stylesheet" type="text/css" href="loginadmin.css">
    <title>LOGIN ADMIN</title>
</head>

<body>
    <div class="containera">
    <h1>LOGIN ADMIN</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-weight:600;">!Username/Password Salah!</p>
    <?php endif; ?><br>

    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" maxlength="50" size="50"id="username" autocomplete="off" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" maxlength="8" size="8" id="password" autocomplete="off" required><br><br>
        <button type="submit" name="login" class="reg">Login</button>
    </form>
</div>
</body>
</html>