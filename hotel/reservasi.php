<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
<h2>Tabel Reservasi</h2>
    <table border="1">
      <tr>
        <td> id_pembayaran </td>
        <td> no_kamar </td>
        <td> tipe_kamar </td>
        <td> no_identitas </td>
        <td> tgl_masuk </td>
        <td> tgl_keluar </td>
      </tr>

    <?php
        include"koneksi.php";
        $data=mysqli_query($koneksi,"select * from reservasi");
        while($tampil=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td> <?php echo $tampil['id_pembayaran'] ?> </td>
        <td> <?php echo $tampil['no_kamar'] ?> </td>
        <td> <?php echo $tampil['tipe_kamar'] ?> </td>
        <td> <?php echo $tampil['no_identitas'] ?> </td>
        <td> <?php echo $tampil['tgl_masuk'] ?> </td>
        <td> <?php echo $tampil['tgl_keluar'] ?> </td>
        <td><a href="hapus-data_reservasi.php?id=<?php echo $tampil['id_pembayaran'];?>"> Hapus </a>
            <a href="edit-data_reservasi.php?id=<?php echo $tampil['id_pembayaran'];?>"> Edit </a></td>
       
    </tr>

     
    <?php

        }
    ?>

    </table>
    <a href="input-reservasi.php"> Tambahkan Data Baru </a>
</html>