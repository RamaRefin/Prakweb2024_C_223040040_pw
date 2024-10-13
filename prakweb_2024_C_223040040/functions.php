<?php 
//koneksi

$con = mysqli_connect("localhost", "root", "", "crud");



function query($query) {
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while(  $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;

}

function tambah($data) {
        global $con;

        $Judul_buku = htmlspecialchars($data["Judul_buku"]);
        $Penulis = htmlspecialchars($data["Penulis"]);
        $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
        $gambar = htmlspecialchars($data["gambar"]);

   //query insert
        $query = "INSERT INTO buku 
                    VALUES
        ('','$Judul_buku', '$Penulis', '$tahun_terbit', '$gambar')";

        mysqli_query($con, $query);

        return mysqli_affected_rows($con);
}


function hapus($id_buku) {
    global $con;
    mysqli_query($con, "DELETE FROM buku WHERE id_buku = $id_buku");
    return mysqli_affected_rows($con);
}

function ubah($data) {
    global $con;

    
    $id_buku = $data["id"];
    $Judul_buku = htmlspecialchars($data["Judul_buku"]);
    $Penulis = htmlspecialchars($data["Penulis"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $gambar = htmlspecialchars($data["gambar"]);

//query insert
    $query = "UPDATE buku SET 
                Judul_buku = '$Judul_buku',
                Penulis = '$Penulis',
                tahun_terbit = '$tahun_terbit',
                gambar = '$gambar'
                WHERE id_buku = $id_buku
                ";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}


function cari($keyword) {
    $query  =  "SELECT * FROM buku 
                WHERE 
                judul_buku LIKE '%$keyword%' OR
                penulis LIKE '%$keyword%' 
                ";
            return query($query);
}


?>