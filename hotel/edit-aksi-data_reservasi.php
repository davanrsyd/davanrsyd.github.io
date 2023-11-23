<?php 
    include 'koneksi.php';

    $id_pembayaran =$_POST['id_pembayaran'];
    $no_kamar =$_POST['no_kamar'];
    $tipe_kamar =$_POST['tipe_kamar'];
    $no_identitas =$_POST['no_identitas'];
    $tgl_masuk =$_POST['tgl_masuk'];
    $tgl_keluar =$_POST['tgl_keluar'];

    mysqli_query($koneksi, "UPDATE reservasi set id_pembayaran='$id_pembayaran', no_kamar='$no_kamar', tipe_kamar='$tipe_kamar', no_identitas='$no_identitas',tgl_masuk='$tgl_masuk',tgl_keluar='$tgl_keluar' WHERE id_pembayaran='$id_pembayaran'");
    header("location:reservasi.php");
?>