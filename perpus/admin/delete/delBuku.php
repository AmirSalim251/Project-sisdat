<?php
include '../../db.php';

if (isset($_POST['delBuku'])) {
    $id = $_POST['delete_id_buku'];
    $id_rak = $_POST['del_jumlah_buku'];
    $cover = mysqli_query($conn, "SELECT cover FROM buku WHERE id= '$id'");
    $cover = mysqli_fetch_array($cover);
    $cover = $cover['cover'];

    $query = "DELETE FROM buku WHERE id = " . $id . "";
    $run_query = mysqli_query($conn, $query);


    if ($run_query) {
        mysqli_query($conn, "UPDATE rak SET jumlah_buku = jumlah_buku - 1 WHERE id = " . $id_rak . "");
        unlink("../../sampul/" . $cover);
        echo '<script>
        alert("Data Buku Berhasil Dihapus!");
        window.location="../dashboard.php";
        </script>';
    } else {
        echo '<script>
        alert("Data Buku Gagal Dihapus!");
        window.location="../dashboard.php";
        </script>';
    }
}