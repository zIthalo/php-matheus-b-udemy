<?php 
// olhar teorias/interface DAO

$host = "localhost";
$user = "ithalo";
$pass = "123";
$db = "daotest";
try{
$conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error <br>";
}

?>