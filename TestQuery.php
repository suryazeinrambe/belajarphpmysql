<?php

require_once __DIR__ .  '/getConnection.php';

$conn = getConnection();

$sql = "SELECT id,name,email FROM customers";
$result = $conn->query($sql);
foreach ($result as $row){
    $id = $row['id'];
    $name = $row['name'];
    $email  = $row['email'];

    echo "ID : $id". PHP_EOL;
    echo "Nama : $name". PHP_EOL;
    echo "Email : $email". PHP_EOL;
}


$conn = null;
