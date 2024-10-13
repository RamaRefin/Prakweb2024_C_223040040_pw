<?php 

require 'functions.php';

// ambil data dari URL
$id_buku = $_GET["id"];

// query data buku berdasarkan id
$bku = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert ('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('Data gagal diubah!');
                document.location.href = 'index.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="ubah.css">
    <title>Update Data Buku</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BookPedia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1 class="text-center mb-4">Update Data Buku</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $bku["id_buku"] ; ?>">

        <div class="form-group">
            <label for="Judul_buku" class="form-label">Judul Buku:</label>
            <input type="text" class="form-control" name="Judul_buku" id="Judul_buku" required
                value="<?= $bku["Judul_buku"]; ?>">
        </div>

        <div class="form-group">
            <label for="Penulis" class="form-label">Penulis:</label>
            <input type="text" class="form-control" name="Penulis" id="Penulis" required
                value="<?= $bku["Penulis"]; ?>">
        </div>

        <div class="form-group">
            <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" required
                value="<?= $bku["tahun_terbit"]; ?>">
        </div>

        <div class="form-group">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="text" class="form-control" name="gambar" id="gambar" required
                value="<?= $bku["gambar"]; ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Update Buku!</button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
