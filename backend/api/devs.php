<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include "conexion.php";

$sql = "SELECT * FROM Devs";
$result = $conn->query($sql);

$Devs = [];

while ($row = $result->fetch_assoc()) {
  $Devs[] = $row;
}

echo json_encode($Devs);
