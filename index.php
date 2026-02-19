<?php
$host = "db";          // nama service / host MySQL
$user = "root";        // user MySQL
$password = "zerodatabase"; // ganti dengan password root MySQL
$database = "db";      // nama database

// Buat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query tabel "name"
$sql = "SELECT * FROM name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "0 results";
}

// Tutup koneksi
$conn->close();
?>

    $sql = "SELECT * FROM name"; // contoh tabel "users"
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mengambil setiap baris data
    while($row = $result->fetch_assoc()) {
        echo " - Nama: " . $row["nama"] . "<br>";
    }
} else {
    echo "0 results";
}

// Tutup koneksi
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeroTzy.ID | Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
</body>

</html>
