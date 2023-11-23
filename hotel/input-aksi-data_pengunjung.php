<?php
include 'koneksi.php';

$no_identitas = $_POST['no_identitas'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telfon = $_POST['telfon'];
$tanggal_reservasi = $_POST['tanggal_reservasi'];

mysqli_query($koneksi, "insert into data_pengunjung values('$no_identitas','$nama','$alamat','$email','$telfon','$tanggal_reservasi')");

header("location: data_pengunjung.php");
?>