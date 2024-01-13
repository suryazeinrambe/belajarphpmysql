<?php
require_once __DIR__ . "/getConnection.php";

try {
    $conn = getConnection();
    $sql =
        <<<SQL
        INSERT INTO customers(id, name, email) VALUES ('5','axnes ', 'axnes@gmail.com');
SQL;
    $conn->exec($sql);
    echo "BERHASIL MENAMBAH DATA!";
}catch (PDOException $err){
    echo $sql . PHP_EOL . $err->getMessage();
}

$conn = null;