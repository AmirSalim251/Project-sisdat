<?php
include '../../db.php';

if (isset($_POST['editBuku'])) {
    session_start();

    $id = $_POST['update_id_buku'];

    $Judul = $_POST['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $Genre = $_POST['Genre'];
    $Lokasi = $_POST['Lokasi'];
    $petugas = $_SESSION['id'];

    // ngambil file lama (file)
    $cover = mysqli_query($conn, "SELECT cover FROM buku WHERE id = '$id'");
    $cover = mysqli_fetch_array($cover);
    $cover = $cover['cover'];
    // edit file sampul (kalo ada)
    if (file_exists($_FILES['sampul']['tmp_name']) || is_uploaded_file($_FILES['sampul']['tmp_name'])) {
        // ngecek si filenya boleh apa nggak
        $allowedFormat = array('jpg', 'png', 'jpeg');
        $newCover = $_FILES['sampul']['name'];
        $fileformat = explode('.', $cover);
        $fileformat = strtolower($fileformat[1]);
        if (!in_array($fileformat, $allowedFormat)) {
            echo '<script>
            alert("Format File Salah!");
            window.location="../dashboard.php";
            </script>';
        } else {
            $fileInsert = $_FILES['sampul']['tmp_name'];
            unlink("../../sampul/" . $cover); // buat delete file lama
            move_uploaded_file($fileInsert, "../../sampul/" . $newCover);
            $cover = $newCover;
        }
    }

    $lokasiLama = mysqli_query($conn, "SELECT id_rak FROM buku WHERE id = '$id'");
    $lokasiLama = mysqli_fetch_array($lokasiLama);
    $lokasiLama = $lokasiLama['id_rak'];

    if (
        $Genre == 0 || $Lokasi == 0 ||
        !filter_var($Penulis, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))
    ) {
        echo '<script>
        alert("Input salah!");
        
        </script>';
    } else {
        if ($lokasiLama != $Lokasi) {
            $run_query = mysqli_query($conn, "UPDATE rak SET jumlah_buku = jumlah_buku + 1 WHERE id = '$Lokasi'");
            $run_query = mysqli_query($conn, "UPDATE rak SET jumlah_buku = jumlah_buku - 1 WHERE id = '$lokasiLama'");
        }
        $query = "UPDATE buku SET cover = '$cover', judul = '$Judul', penulis = '$Penulis', penerbit = '$Penerbit', 
                genre = '$Genre', id_petugas = '$petugas', id_rak = '$Lokasi'
                WHERE id = '$id' ";
        $run_query = mysqli_query($conn, $query);

        if ($run_query) {
            echo '<script>
            alert("Data Buku Berhasil Diedit!");
            window.location="../dashboard.php";
            </script>';
        } else {
            echo '<script>
            alert("Data Buku Gagal Diedit!");
            window.location="../dashboard.php";
            </script>';
        }
    }
}