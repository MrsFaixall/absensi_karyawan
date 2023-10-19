<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn           = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
$masuk = date("H:i:s");
$keluar = NULL;

//query insert data ke dalam database
$query = "INSERT INTO absensi (nik, nama_lengkap, jabatan, jam_masuk, jam_keluar) VALUES ('$nisn', '$nama_lengkap', '$jabatan', '$masuk', '$keluar')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>