<?php
include '../../db.php';

if(isset($_POST['delPinjam']))
{
    $id = $_POST['delete_id_pinjam'];

    $query = "DELETE FROM peminjaman WHERE id = ".$id."";
    $run_query = mysqli_query($conn, $query);

    if ($run_query)
    {
        echo '<script>
        alert("Data Peminjaman Berhasil Dihapus!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Data Peminjaman Gagal Dihapus!");
        window.location="../dashboard.php";
        </script>';
    }
}
?>