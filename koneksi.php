<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengeksekusi kueri SQL
$sql = "SELECT * FROM nama_tabel";
$result = $conn->query($sql);

// Menampilkan hasil data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama"] . " - Email: " . $row["email"] ."HP" . $row["Hp"] . "<br>";
    }
} else {
    echo "Tidak ada data ditemukan.";
}


// Menutup koneksi
$conn->close();
?>
