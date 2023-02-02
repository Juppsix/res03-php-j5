<?php 
require './user.php';

$host = "db.3wa.io";
$port = "3306";
$dbname = "julienpostec_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "julienpostec";
$password = "6e2ff913f30f66dac7b26c1ce4af9d2a";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
var_dump($db);
?>