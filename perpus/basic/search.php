<!-- page ini mirip ama page browse, jadi cssnya pake yang itu aja -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/browse.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Overpass:wght@500&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
</head>
<body>
    <!-- ini buat header nya -->
    <?php
        include '../header.php';
        include '../db.php';
        $key = $_GET['search'];
        $query = "SELECT * FROM buku WHERE CONCAT(judul, penulis, penerbit, genre) LIKE '%$key%'";
        $bukuArr = mysqli_query($conn, $query);

        
    ?>

    <div class="container">
        <div class="title">
            <h2>Kata Kunci : <?php echo $key ?></h2>
            <p>Terdapat <?php echo mysqli_num_rows($bukuArr) ?> buku dari Kata Kunci yang dicari</p>
        </div>
        <div class="list-buku">
            <?php
            if(mysqli_num_rows($bukuArr) > 0) {
                while($dataBuku = mysqli_fetch_array($bukuArr)) {
            ?>
            <a href="book.php?id_buku=<?php echo $dataBuku['id']?>" class="box-buku">
                <div class="info-buku">
                    <div class="sampul">
                        <img src="../sampul/<?php echo $dataBuku['cover']?>">
                    </div>
                    <div class="detail">
                        <p><?php echo $dataBuku['penulis'] ?></p>
                        <h3><?php echo $dataBuku['judul'] ?></h3>
                    </div>
                </div>
            </a>
            <?php }} else{?>
                <h2>Tidak ada buku dalam genre ini</h2>
            <?php } ?>
        </div>
    </div>


</body>
</html>