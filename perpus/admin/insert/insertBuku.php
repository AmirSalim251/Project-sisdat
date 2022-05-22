<?php
include '../../db.php';
session_start();

if(isset($_POST['insertBuku']))
{
    $id_buku = mysqli_query($conn, "SELECT MAX(id) as OLD_id FROM buku");
    $id_buku = mysqli_fetch_array($id_buku);
    $id_buku = $id_buku['OLD_id'] + 1;

    $filename =$_FILES['sampul']['tmp_name'];
    $id_petugas = $_SESSION['id'];
    $cover = $_FILES['sampul']['name'];
    $Judul = $_POST['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $Genre = $_POST['Genre'];
    $Lokasi = $_POST['Lokasi'];

    $fileFormat = explode('.', $cover);
    $fileFormat = $fileFormat[1];

    $allowedFormat = array('jpg', 'png', 'jpeg');
    if ($Genre == 0 || $Lokasi == 0 || !in_array($fileFormat, $allowedFormat) || 
        !filter_var($Penulis, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))))
    {
        echo '<script>
        alert("Input salah!");
        window.location="../dashboard.php";
        </script>';
    }
    else 
    {
        $query = "INSERT INTO buku VALUES ('$id_buku', '".$Judul."', '".$Penulis."', 
        '".$Penerbit."', '".$cover."', '".$Genre."', '".$id_petugas."', '".$Lokasi."')";
        $run_query = mysqli_query($conn, $query);

        if($run_query)
        {
            move_uploaded_file($filename, "../../sampul/".$cover);
            mysqli_query($conn, "UPDATE rak SET jumlah_buku = jumlah_buku + 1 WHERE id = ".$Lokasi."");
            echo '<script>
            alert("Data Buku berhasil Ditambahkan!");
            window.location="../dashboard.php";
            </script>';
        }
        else {
            echo '<script>
            alert("Penambahan Data Buku Gagal!");
            window.location="../dashboard.php";
            </script>';
        }
    }


}
?>
