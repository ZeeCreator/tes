<?php
    $host = "db";
    $user = "root";
    $pass = "zerodatabase";
    $dbnya = "db";
    $conn = mysqli_connect($host,$user,$pass,$dbnya);

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