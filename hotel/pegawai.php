<html>
<link rel="stylesheet" type="text/css" href="tabel.css">
   <h2> Tabel Pegawai</h2>
    <table border="1">
      <tr>
        <td> id_pegawai </td>
        <td> nama </td>
        <td> posisi </td>
        <td> shift </td>
        <td> aksi </td>
      </tr>

    <?php
        include"koneksi.php";
        $data=mysqli_query($koneksi,"select * from pegawai");
        while($tampil=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td> <?php echo $tampil['id_pegawai'] ?> </td>
        <td> <?php echo $tampil['nama'] ?> </td>
        <td> <?php echo $tampil['posisi'] ?> </td>
        <td> <?php echo $tampil['shift'] ?> </td>
        <td><a href="hapus-pegawai.php?id=<?php echo $tampil['id_pegawai'];?>"> Hapus </a>
            <a href="edit-pegawai.php?id=<?php echo $tampil['id_pegawai'];?>"> Edit </a></td>
       
    </tr>

     
    <?php

        }
    ?>

    </table>
    <a href="input-pegawai.php"> Tambahkan Data Baru </a>
</html>