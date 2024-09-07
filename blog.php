<?php
// Sertakan koneksi database
include 'db_connect.php';

// Query untuk mengambil artikel dari database
$result = $conn->query("SELECT title, content FROM posts");

// Tampilkan artikel satu per satu
while ($row = $result->fetch_assoc()) {
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['content'] . "</p>";
}
?>
