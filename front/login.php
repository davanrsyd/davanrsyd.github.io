<html>
<?php
// Sambungkan ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "login_page"; // Ganti dengan nama database yang sesuai

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user dengan username dan password yang sesuai
$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) == 1) {
    header("Location: dasboard.html");
} else {
    echo "Login gagal. Silakan cek kembali username dan password Anda.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
</html>
