<?php
require_once __DIR__ . "/getConnection.php";
$conn = getConnection();

$username  = "admin";
$password = 'admin';

$sql = "SELECT * FROM admin where username = ? AND password = ? ";
$result = $conn->prepare($sql);
$result->execute([$username, $password]);


$succes = false;
$find_user = null;
foreach ($result as $row){
    $succes = true;
    $find_user = $row['username'];
}

if($succes){
    echo "SUKSES LOGIN ! $find_user". PHP_EOL;
} else {
    echo "GAGAL LOGIN !";
}


$conn = null;