<?php 
    include 'koneksi.php';

    $idkamar =$_POST['idkamar'];
    $tipe =$_POST['tipe'];
    $fasilita =$_POST['fasilita'];
    $ready =$_POST['ready'];

    mysqli_query($koneksi, "update data_kamar set id_kamar='$idkamar', tipe_kamar='$tipe', fasilitas='$fasilita', ketersediaan='$ready'");
    header('location:data_kamar.php');
?>