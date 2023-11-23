<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
<h2>Tabel Data Pengunjung</h2>
    <table border="1">
      <tr>
        <td> no_identitas </td>
        <td> nama </td>
        <td> alamat </td>
        <td> email </td>
        <td> telfon </td>
        <td> tanggal_reservasi </td>
      </tr>

    <?php
        include"koneksi.php";
        $data=mysqli_query($koneksi,"select * from data_pengunjung");
        while($tampil=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td> <?php echo $tampil['no_identitas'] ?> </td>
        <td> <?php echo $tampil['nama'] ?> </td>
        <td> <?php echo $tampil['alamat'] ?> </td>
        <td> <?php echo $tampil['email'] ?> </td>
        <td> <?php echo $tampil['telfon'] ?> </td>
        <td> <?php echo $tampil['tanggal_reservasi'] ?> </td>
        <td><a href="hapus-data_pengunjung.php?id=<?php echo $tampil['no_identitas'];?>"> Hapus </a>
            <a href="edit-data_pengunjung.php?id=<?php echo $tampil['no_identitas'];?>"> Edit </a></td>
       
    </tr>

     
    <?php

        }
    ?>

    </table>
    <a href="input-data_pengunjung.php"> Tambahkan Data Baru </a>
</html>