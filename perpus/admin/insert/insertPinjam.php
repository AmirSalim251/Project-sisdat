<?php
include '../../db.php';
session_start();

if(isset($_POST['insertPinjam']))
{
    $id_pinjam = mysqli_query($conn, "SELECT MAX(id) AS tua_id FROM peminjaman");
    $id_pinjam = mysqli_fetch_array($id_pinjam);
    $id_pinjam = $id_pinjam['tua_id'] + 1;
    $id_buku = $_POST['buku'];
    $id_anggota = $_POST['anggota'];
    $id_petugas = $_SESSION['id'];
    $today = date("y-m-d");
    $due_date = date('y-m-d', strtotime($today.' + 7 days'));

    if($id_buku == 0 || $id_anggota == 0)
    {
        echo '<script>
        alert("Input salah!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        $query = "INSERT INTO peminjaman VALUES ('$id_pinjam', '".$id_buku."', '".$id_petugas."', 
            '".$id_anggota."', '".$today."', '".$due_date."')";
        $run_query = mysqli_query($conn, $query);

        if($run_query)
        {
            echo '<script>
            alert("Data Peminjaman Berhasil Ditambahkan!");
            window.location="../dashboard.php";
            </script>';
        }
        else {
            echo '<script>
            alert("Penambahan Data Peminjaman Gagal!");
            window.location="../dashboard.php";
            </script>';
        }
    }

    
}
?>