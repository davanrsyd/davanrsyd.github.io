<?php 
include 'koneksi.php';

//$id_kamar = $_POST['id_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$fasilitas = $_POST['fasilitas'];
$ketersediaan = $_POST['ketersediaan'];

mysqli_query($koneksi,"insert into data_kamar values('$id_kamar','$tipe_kamar','$fasilitas','$ketersediaan')");
header("location:data_kamar.php");
?>