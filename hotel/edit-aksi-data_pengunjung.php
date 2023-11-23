<?php 
    include 'koneksi.php';

    $no_identitas =$_POST['no_identitas'];
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $email =$_POST['email'];
    $telfon =$_POST['telfon'];
    $tangga_reservasil =$_POST['tanggal_reservasi'];

    mysqli_query($koneksi, "UPDATE data_pengunjung set no_identitas='$no_identitas', nama='$nama', alamat='$alamat', email='$email',telfon='$telfon',tanggal_reservasi='$tanggal_reservasi'WHERE no_identitas='$no_identitas'");
    header('location:data_pengunjung.php');
?>