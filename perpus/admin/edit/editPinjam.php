<?php
include '../../db.php';

if (isset($_POST['editPinjam']))
{
    session_start();
    $id = $_POST['update_id_pinjam'];
    $id_buku = $_POST['buku'];
    $id_anggota = $_POST['anggota'];
    $id_petugas = $_SESSION['id'];

    if ($id_buku == 0 || $id_anggota == 0)
    {
        echo '<script>
        alert("Input salah!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        $query = "UPDATE peminjaman SET id_anggota = '".$id_anggota."', 
                id_buku = '".$id_buku."', id_petugas = '".$id_petugas."' 
                WHERE id = ".$id." ";
        $run_query = mysqli_query($conn, $query);
    
        if($run_query)
        {
            echo '<script>
            alert("Data Peminjaman Berhasil Diedit!");
            window.location="../dashboard.php";
            </script>';
        }
        else {
            echo '<script>
            alert("Data Peminjaman Gagal Diedit!");
            window.location="../dashboard.php";
            </script>';
        }
    }
}

?>