<?php 

require 'functions.php';
$buku = query(" SELECT * FROM buku");


// tombol cari 
if( isset($_POST["cari"]) ) {
    $buku = cari($_POST["keyword"]);

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>BookPedia</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BookPedia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tambah.php">Tambah Data Buku</a></li>
          </ul>
        </li>
      </ul>
      <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Buku apa yang ingin dicari.." autocomplete="off">
    <button type="submit" name="cari">Cari</button>

</from>
    </div>
  </div>
</nav>

<div class="container">
    <h1 class="text-center mt-4">Daftar Buku</h1>

    <div class="table-container">
        <table class="table table-bordered table-hover table-responsive">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach( $buku as  $row ) :  ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="ubah.php?id=<?= $row['id_buku']; ?>">Ubah</a>
                        <a class="btn btn-sm btn-danger" href="hapus.php?id=<?= $row['id_buku']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row['gambar']; ?>" alt="Gambar Buku"></td>
                    <td><?= $row['Judul_buku']; ?></td>
                    <td><?= $row['Penulis']; ?></td>
                    <td><?= $row['tahun_terbit']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>