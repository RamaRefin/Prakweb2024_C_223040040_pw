<?php 

require 'functions.php';


// ambil data url
$id_buku = $_GET["id"];


// query data mahasiswa dengan id


$bku = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];




//tombol sudah di tekan
if(isset($_POST["submit"]) ) {

    //cek erorr
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil di ubah!');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert ('data gagal di ubah!');
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
    <title>Update Data Buku</title>
</head>
<body>

<h1> Update Data Buku</h1>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $bku["id_buku"] ; ?>">

    <ul> 

        <li>
            <label for="Judul_buku">judul Buku : </label>
            <input type="text" name="Judul_buku" id="Judul_buku" required
                value="<?= $bku["Judul_buku"]; ?>">
        </li>
        <li>
            <label for="Penulis">Penulis: </label>
            <input type="text" name="Penulis" id="Penulis" required
            value="<?= $bku["Penulis"]; ?>">
        </li>
        <li>
            <label for="tahun_terbit">tahun_terbit : </label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" required
            value="<?= $bku["tahun_terbit"]; ?>">
        </li>
        <li> 
            <label for="gambar">gambar : </label>
            <input type="text" name="gambar" id="gambar" required
            value="<?= $bku["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Update Buku! </button>
        </li>

    </ul>


</from>
    
</body>
</html>







