<?php 
require 'functions.php';
//dbms konek
$con = mysqli_connect("localhost", "root", "", "crud");


//tombol sudah di tekan
if(isset($_POST["submit"]) ) {

    //cek erorr
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil di tambahkan!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert ('data gaga; di tambahkan!');
            document.location.href = 'index.php'
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
    <title>Tambah Data Buku</title>
</head>
<body>

<h1> Tambah Data Buku</h1>

<form action="" method="post">

    <ul> 

        <li>
            <label for="Judul_buku">judul Buku : </label>
            <input type="text" name="Judul_buku" id="Judul_buku" required>
        </li>
        <li>
            <label for="Penulis">Penulis: </label>
            <input type="text" name="Penulis" id="Penulis" required>
        </li>
        <li>
            <label for="tahun_terbit">tahun_terbit : </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required>
        </li>
        <li> 
            <label for="gambar">gambar : </label>
            <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Buku! </button>
        </li>

    </ul>


</from>
    
</body>
</html>