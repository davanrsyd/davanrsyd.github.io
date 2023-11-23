<?php
    include 'koneksi.php';

    $id_pegawai =$_POST['id_pegawai'];
    $nama =$_POST['nama'];
    $posisi =$_POST['posisi'];
    $shift =$_POST['shift'];

    mysqli_query($koneksi, "UPDATE pegawai set id_pegawai='$id_pegawai', nama='$nama', posisi='$posisi', shift='$shift'WHERE id_pegawai='$id_pegawai'");
    header("location:pegawai.php");

    ?>
