<?php

include('koneksi.php');

//get id
$nik = $_GET['nik'];

$query = "DELETE FROM absensi WHERE nik = '$nik'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>