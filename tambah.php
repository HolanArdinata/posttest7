<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $id = htmlspecialchars($_POST["id"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $brand = htmlspecialchars($_POST["brand"]);
    $year = htmlspecialchars($_POST["year"]);
    $color = htmlspecialchars($_POST["color"]);
    $price = htmlspecialchars($_POST["price"]);
    $namafile = htmlspecialchars($_POST["namafile"]);
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO mercle VALUES ('','$nama', '$brand', '$year', '$color','$price','$gambar','$namafile','')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="crud.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><h1>Data barang</h1></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" required></td><br>
            </tr>
            <br>
            <tr>
                <td>Brand  :</td>
                <td><input type="text" name="brand" required></td><br>
            </tr>
            <tr>
                <td>Year        :</td>
                <td><input type="number" name="year"></td><br>
            </tr>
            <tr>
                <td>color :</td> 
                <td><input type="text" name="color" required></td><br>
            </tr>
            <tr>
                <td>Price :</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td>File Name :</td>
                <td><input type="text" name="namafile"></td>
            </tr>
            <tr>
                <td>Upload Gambar :</td>
                <td><input type="file" name="gambar" style ="margin-top:5px;"></td>
            </tr>
            <td><button type="submit" name="tambah">Tambah</button></td>
            <td><button type="reset" name="tambah">Reset</button></td>
        </table>
    </form>
</body>
</html>