<?php
include "koneksi.php";

$id= $_GET['id'];
mysqli_query($koneksi, "delete from data_pengunjung where no_identitas='$id'");

header("location: data_pengunjung.php");
?>