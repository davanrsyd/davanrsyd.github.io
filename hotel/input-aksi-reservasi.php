<?php
include 'koneksi.php';

$id_pembayaran = $_POST['id_pembayaran'];
$no_kamar = $_POST['no_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$no_identitas = $_POST['no_identitas'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];

mysqli_query($koneksi, "insert into reservasi values('$id_pembayaran','$no_kamar','$tipe_kamar','$no_identitas','$tgl_masuk','$tgl_keluar')");

header("location: reservasi.php");
?>