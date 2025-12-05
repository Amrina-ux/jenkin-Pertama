<?php
require_once "koneksi.php";

$db = new KoneksiDatabase();

$data = $db->query("SELECT * FROM users");  // contoh tabel users

while ($row = $data->fetch_assoc()) {
    echo $row["nama"] . "<br>";
}

$db->close();
