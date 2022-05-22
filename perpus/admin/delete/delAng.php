<?php
include '../../db.php';

if(isset($_POST['delAng']))
{
    $id = $_POST['delete_id_ang'];

    $query = "DELETE FROM anggota WHERE id = ".$id."";
    $run_query = mysqli_query($conn, $query);

    if ($run_query)
    {
        echo '<script>
        alert("Data Anggota Berhasil Dihapus!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Data Anggota Gagal Dihapus!");
        window.location="../dashboard.php";
        </script>';
    }
}
?>