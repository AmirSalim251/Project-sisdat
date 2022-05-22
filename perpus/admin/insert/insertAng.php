<?php
include '../../db.php';

if(isset($_POST['insertAng']))
{
    $id_ang = mysqli_query($conn, "SELECT MAX(id) AS old_id FROM anggota");
    $id_ang = mysqli_fetch_array($id_ang);
    $id_ang = $id_ang['old_id'] + 1;
    $nama = $_POST['Nama'];
    $noTelp = $_POST['noTelp'];

    if (!filter_var($nama, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))))
    {
        echo '<script>
        alert("salah input!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        $query = "INSERT INTO anggota VALUES ('$id_ang', '".$nama."', '".$noTelp."')";
        $run_query = mysqli_query($conn, $query);
    
        if($run_query)
        {
            echo $id_max['id'];
            echo '<script> 
            alert("Anggota Berhasil Didaftarkan!");
            window.location="../dashboard.php";
            </script>';
        }
        else {
            echo '<script>
            alert("Pendaftaran Anggota Baru gagal!");
            window.location="../dashboard.php";
            </script>';
        }
    }
}
?>
