<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM mercle WHERE id= $id");

$mercle = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mercle[] = $row;
}

$mc = $mercle[0];

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $brand = htmlspecialchars($_POST["brand"]);
    $year = htmlspecialchars($_POST["year"]);
    $color = htmlspecialchars($_POST["color"]);
    $price = htmlspecialchars($_POST["price"]);



    $sql = "UPDATE mercle SET
            nama = '$nama',
            brand = '$brand',
            year = '$year',
            color = '$color',
            price = '$price'
            WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'edit.php';
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
    <title>Edit Data</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h1>Edit Data</h1></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $mc["nama"]; ?>" ><br><br></td>
            </tr>
                <td>Brand</td>
                <td><input type="text" name="brand" value="<?php echo $mc["brand"]; ?>"><br><br></td>
            <tr>
                <td>Year</td>
                <td><input type="text" name="year" value="<?php echo $mc["year"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type="text" name="color" value="<?php echo $mc["color"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="<?php echo $mc["price"]; ?>"><br><br></td>
            </tr>
            <tr>
                <td>File Name :</td>
                <td><input type="text" name="namafile" value="<?php echo $mc["namafile"]; ?>"></td>
            </tr>
            <tr>
                <td>Upload Gambar :</td>
                <td><input type="file" name="gambar" style ="margin-top:5px;" value="<?php echo $mc["namafile"]; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name="tambah">Confirm</button></td>
            </tr>
        </table>
    </form>
</body>
</html>