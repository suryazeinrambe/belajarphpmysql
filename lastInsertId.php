<?php
require_once __DIR__ . "/getConnection.php";

$conn = getConnection();
$sql = "INSERT INTO coments(email, comment) VALUES ('adipatidolken@gmail.com', 'Hallo Semua!')";
$conn->exec($sql);
$id = $conn->lastInsertId();
//$conn->


var_dump($id);

$conn = null;