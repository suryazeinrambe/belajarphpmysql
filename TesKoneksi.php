<?php

$host = 'localhost';
$port = 3306;
$dbname = 'belajarphpdatabase';
$username = 'root';
$password = '';
try {
    $conn = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    echo "Sukses Terkoneksi MYSQL";
//    Menutup Koneksi
    $conn = null;
} catch (PDOException $exception){
    echo "ERROR TERKONEKSI KE DATABASE! : " . $exception->getMessage(). PHP_EOL;
}