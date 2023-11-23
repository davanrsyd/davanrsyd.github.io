<?php 
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$shift = $_POST['shift'];

mysqli_query($koneksi,"insert into pegawai values('$id_pegawai','$nama','$posisi','$shift')");
header("location:pegawai.php");
?>