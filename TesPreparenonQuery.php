<?php
require_once __DIR__ . "/getConnection.php";
$conn = getConnection();

$username  = "andi";
$password = 'rahasia';

$sql = "INSERT INTO admin (username,password)VALUES(:username, :password)";+
$result = $conn->prepare($sql);
$result->bindParam('username',$username);
$result->bindParam('password',$password);
$result->execute();



$conn = null;