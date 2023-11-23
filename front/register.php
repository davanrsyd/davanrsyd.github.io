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
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];



// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Query untuk menyimpan data ke database
$query = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.html");
} else {
    echo "Registrasi gagal. Silakan coba lagi.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
