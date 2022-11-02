<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = strtolower(stripslashes($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

if ($password == $cpassword) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $cek_username = "SELECT username FROM regis WHERE username = '$username'";
    $temp = mysqli_query($conn, $cek_username);
    $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
            alert('!nama ini sudah digunakan!');
            document.location.href = 'register.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO regis VALUES ('','$username','$password')";
            mysqli_query($conn, $insert_sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>
                        alert('!registrasi berhasil!');
                        document.location.href = 'loginadmin.php';
                    </script>";
            } else {
                echo "<script>
                        alert('!Data gagal di rgister!');
                        document.location.href = 'register.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('!Konfirmasi password yang kamu ketik!');
                    document.location.href = 'register.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="regis.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>REGISTER</title>
</head>

<body class="c">
<div class="containerr">
    <h1>Register </h1>
    <form action="" method="post">
         <label for="username">Username</label><br>
        <input type="text" name="username" id="username" size="35" autocomplete="off" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" maxlength="8" size="8" id="password" autocomplete="off" required><br><br>
        <label for="cpassword">Confirm Password</label><br>
        <input type="password" name="cpassword" maxlength="8" size="8" id="cpassword" autocomplete="off" required><br><br>
        <button type="submit" name="register" class="reg">Register</button>
        
    </form>
</div>

</body>
</html>
