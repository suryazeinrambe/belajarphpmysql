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

if($row = $result->fetch()){
    var_dump($row);
    echo "SUKSES LOGIN !" . $row['username'] . PHP_EOL;
} else {
    echo "USERNAME ATAU PASSWORD SALAH !" . PHP_EOL;
}


$conn = null;