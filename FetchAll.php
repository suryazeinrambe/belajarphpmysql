<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
$customers = $result->fetchAll();
var_dump($customers);

$conn = null;