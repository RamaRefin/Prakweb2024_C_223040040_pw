<?php 

require 'functions.php';
$buku = query(" SELECT * FROM buku");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>



            <h1> Daftar Buku </h1>

    <table border="1" cellpadding="10" cellspacing="0">

<tr> 
            <th>No. </th>
            <th>Aksi </th>
            <th>Gambar </th>
            <th>Nama Buku </th>
            <th>Penulis </th>
            <th>Tahun terbit </th>
</tr>


<?php $i = 1; ?>
<?php foreach( $buku as  $row ) :  ?>
<tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" width=50></td>
        <td><?=  $row = ["Nama Buku"]; ?></td>
        <td><?=  $row = ["Penulis"]; ?></td>
        <td><?=  $row = ["Tahun terbit"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>


</table>








</body>
</html>