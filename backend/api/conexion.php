<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "music_shop_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}

$conn->set_charset("utf8mb4");
