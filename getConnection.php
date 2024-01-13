<?php
function  getConnection():PDO
{
    $host = 'localhost';
    $port = 3306;
    $dbname = 'belajarphpdatabase';
    $username = 'root';
    $password = '';

    return new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);

}
