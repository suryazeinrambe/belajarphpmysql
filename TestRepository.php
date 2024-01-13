<?php
require_once __DIR__.'/getConnection.php';
require_once __DIR__ . '/Model/Coment.php';
require_once  __DIR__ . '/Repository/ComentRepository.php';

use Repository\ComentRepositoryImpl;
use Model\Coment;

$conn = getConnection();
$repo = new \Repository\ComentRepositoryImpl($conn);
//$coment = new Coment(email: "repo@gmail.com", coment: "Hi");
//$newComent = $repo->insert($coment);

//var_dump($newComent->getEmail());

//$coment = $repo->findById(45);
//var_dump($coment );
$coment = $repo->findAll();
var_dump($coment);
$conn = null;