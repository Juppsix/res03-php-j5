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

$tabuser = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$clark = new user($tabuser["firstName"], $tabuser["lastName"], $tabuser["email"]);

var_dump($clark);

// SELECT * FROM user LIMIT 1

$query = $db->prepare("SELECT * FROM users LIMIT 1");
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
var_dump($user);

$newUser = new User($user["first_name"], $user["last_name"], $user["email"]);
$newUser->setId($user["id"]);

var_dump($newUser);     // j'ai hydraté 

$query = $db->prepare("SELECT * FROM users");
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($user);


$newUse = [];
foreach($user as $usere){ // on parcours le tableau des users 
    $usere10 = new User($usere["first_name"], $usere["last_name"], $usere["email"]);
    $usere10-> setId($usere["id"]);       //créer une instance de la classe user.php 
    $newUse[] = $usere10;
}
var_dump($newUse);

?>