<?php
require_once __DIR__ . "/getConnection.php";
$conn = getConnection();

$username  = "suryazein21";
$password = 'rahasia';

$sql = "SELECT * FROM admin where username = ? AND password = ? ";
$result = $conn->prepare($sql);
$result->bindParam(1,$username);
$result->bindParam(2,$password);
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
    echo "GAGAL LOGIN ! Username atau Password salah !";
}


$conn = null;