<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kamar</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; /* Agar elemen pada sumbu Y (vertikal) */
        }

        h3 {
            color: #4e342e;
            margin-bottom: 20px; /* Untuk memberi ruang antara h3 dan form */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }

        table {
            width: 100%;
            text-align: center;
        }

        td {
            padding: 10px;
        }

        input[type="number"],
        input[type="text"],
        input[type="submit"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #8D6E63;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #5D4037;
        }
    </style>
</head>
<h3> Edit Pegawai </h3>

<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from pegawai where id_pegawai='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
    <table>
       <tr>
          <td> id_pegawai </td>
          <td>
            <input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>">
          </td>
       </tr>
       <tr>
          <td> nama </td>
          <td>
            <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>">
          </td>
       </tr>
       <tr>
          <td> posisi </td>
          <td>
            <input type="text" name="posisi" value="<?php echo $tampil['posisi']; ?>">
          </td>
       </tr>
       <tr>
          <td> shift </td>
          <td>
            <input type="text" name="shift" value="<?php echo $tampil['shift']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
       </tr>
    </table>
</form>

<?php
}
?>
</html>