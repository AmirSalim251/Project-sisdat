<?php
include '../../db.php';

if (isset($_POST['editAng']))
{
    $id = $_POST['update_id_ang'];
    $nama = $_POST['Nama'];
    $noTelp = $_POST['noTelp'];

    if (!filter_var($nama, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/"))))
    {
        echo '<script>
        alert("Input salah!");
        window.location="../dashboard.php";
        </script>';
    }
    else
    {
        $query = "UPDATE anggota SET nama = '".$nama."', no_telpon = '".$noTelp."' 
                WHERE id = '".$id."' ";
        $run_query = mysqli_query($conn, $query);
    
        if($run_query)
        {
            echo '<script>
            alert("Data Anggota Berhasil Diedit!");
            window.location="../dashboard.php";
            </script>';
        }
        else {
            echo '<script>
            alert("Data Anggota Gagal Diedit!");
            window.location="../dashboard.php";
            </script>';
        }
    }
}

?>