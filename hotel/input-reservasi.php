<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi</title>
    <style>
        body {
    background-color: #f5f5f5;
    font-family: 'Arial', sans-serif;
    display: flex;
    flex-direction: column; /* Mengatur tata letak kolom */
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}

h3 {
    color: #4e342e;
    text-align: center;
    margin-top: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 400px;
    margin-top: 20px; /* Menambahkan ruang di atas form */
}

/* Tambahkan properti CSS berikut untuk memperbaiki tampilan tabel dan input */
table {
    width: 100%;
    text-align: left; /* Memastikan teks diinput pada tabel berada di sebelah kiri */
    margin-bottom: 15px; /* Menambahkan ruang di bawah tabel */
}

td {
    padding: 10px;
}

input[type="number"],
input[type="text"],
input[type="date"],
input[type="submit"] {
    padding: 8px;
    margin: 5px 0;
    width: calc(100% - 16px); /* Menyesuaikan lebar input dengan padding */
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
<h3>Masukan Data Reservasi</h3>
<form method="post" action="input-aksi-reservasi.php">
    <form>
        <table>
            <tr>
                <td>id_pembayaran</td>
                <td><input type="number" name="id_pembayaran"></td>
            </tr>
            <tr>
                <td>no_kamar</td>
                <td><input type="number" name="no_kamar"></td>
            </tr>

            <tr>
                <td>tipe_kamar</td>
                <td><input type="text" name="tipe_kamar"></td>
            </tr>
            <tr>
                <td>no_identitas</td>
                <td><input type="number" name="no_identitas"></td>
            </tr>
            <tr>
                <td>tgl_masuk</td>
                <td><input type="date" name="tgl_masuk"></td>
            </tr>
            <tr>
                <td>tgl_keluar</td>
                <td><input type="date" name="tgl_keluar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>

</html>