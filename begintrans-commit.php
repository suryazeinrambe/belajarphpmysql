<?php
require_once __DIR__ . "/getConnection.php";

$conn = getConnection();

$conn->beginTransaction();
$conn->exec("INSERT INTO coments(email, comment) VALUES ('surya@gmail.com', 'hi')");
$conn->exec("INSERT INTO coments(email, comment) VALUES ('zein@gmail.com', 'hi kamu')");
$conn->exec("INSERT INTO coments(email, comment) VALUES ('rambe@gmail.com', 'hi dia ')");
$conn->exec("INSERT INTO coments(email, comment) VALUES ('rambutan@gmail.com', 'hi saya')");
$conn->exec("INSERT INTO coments(email, comment) VALUES ('taik@gmail.com', 'hi juga ')");
$conn->exec("INSERT INTO coments(email, comment) VALUES ('rambe@gmail.com', 'hi alo')");
$conn->commit();

$conn = null;