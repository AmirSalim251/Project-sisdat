<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/book.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Overpass:wght@500&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include '../header.php';
    ?>

    <?php
        include '../db.php';
        $idBuku = $_GET['id_buku'];
        $buku = mysqli_query($conn, "SELECT buku.judul, buku.penulis, buku.penerbit, 
                                buku.cover, buku.genre, rak.nama_rak as nama_rak FROM buku 
                                LEFT JOIN rak ON rak.id = buku.id_rak
                                WHERE buku.id = '".$idBuku."'");
        $buku = mysqli_fetch_array($buku);
        ?>
    <div class="box">
        <img src="../sampul/<?php echo $buku['cover'] ?>" alt="">
        <div class="title">
            <p><?php echo $buku['penulis']?></p>
            <h3><?php echo $buku['judul']?></h3>
            <hr>
            <div class="detail">
                <h4>Detail</h4>
                <p>Penerbit : <?php echo $buku['penerbit']?></p>
                <p>Genre : <?php echo $buku['genre']?></p>
                <p>Lokasi : <?php echo $buku['nama_rak']?></p>
            </div>
        </div>
    </div>
</body>
</html>