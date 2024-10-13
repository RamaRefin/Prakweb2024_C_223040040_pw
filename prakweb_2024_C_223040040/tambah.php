<?php 
require 'functions.php';
// Koneksi ke database
$con = mysqli_connect("localhost", "root", "", "crud");

// Jika tombol submit ditekan
if(isset($_POST["submit"]) ) {

    // Cek apakah data berhasil ditambahkan
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert ('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('Data gagal ditambahkan!');
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
    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Data Buku</title>

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
    <h1 class="text-center mb-4">Tambah Data Buku</h1>

    <form action="" method="post">

        <div class="form-group">
            <label for="Judul_buku" class="form-label">Judul Buku:</label>
            <input type="text" class="form-control" name="Judul_buku" id="Judul_buku" placeholder="Masukkan Judul Buku" required>
        </div>

        <div class="form-group">
            <label for="Penulis" class="form-label">Penulis:</label>
            <input type="text" class="form-control" name="Penulis" id="Penulis" placeholder="Masukkan Nama Penulis" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
        </div>

        <div class="form-group">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Masukkan URL Gambar" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Tambah Buku!</button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
