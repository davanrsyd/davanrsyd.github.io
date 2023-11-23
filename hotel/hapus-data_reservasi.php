<?php
include "koneksi.php";

$id= $_GET['id_pembayaran'];
mysqli_query($koneksi, "delete from reservasi where id_pembayaran='$id'");

header("location: reservasi.php");
?>