<?php
require_once __DIR__ . "/getConnection.php";

$conn = getConnection();

$conn->beginTransaction();
//$conn->exec("DELETE FROM coments where id = 1 ");
//$conn->exec("DELETE FROM coments where id = 2 ");
//$conn->exec("DELETE FROM coments where id = 3 ");
//$conn->exec("DELETE FROM coments where id = 4 ");

$conn->exec("INSERT INTO coments(email, coment) VALUES ('zein@gmail.com', 'hi kamu')");
$conn->exec("INSERT INTO coments(email, coment) VALUES ('rambe@gmail.com', 'hi dia ')");
$conn->exec("INSERT INTO coments(email, coment) VALUES ('rambutan@gmail.com', 'hi saya')");
//$conn->exec("INSERT INTO coments(email, comment) VALUES ('taik@gmail.com', 'hi juga ')");
$conn->exec("INSERT INTO coments(email, coment) VALUES ('rambe11@gmail.com', 'hi alo')");
$conn->commit();

$conn = null;