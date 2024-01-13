<?php
require_once __DIR__ . "/getConnection.php";
$conn = getConnection();

$username  = "admin";
$password = 'admin';

$sql = "SELECT * FROM admin where username = :username AND password = :password ";
$result = $conn->prepare($sql);
$result->bindParam("username",$username);
$result->bindParam("password",$password);
$result->execute();


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