<?php

require_once __DIR__. '/GetConnection.php';

$connetion = getConnection();

$username = "admin': #";
$password = "admin";

$sql =  "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement =  $connetion->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();
//var_dump($statement);

$succes = false;
$find_user = null;

foreach ($statement as $row){
    $succes =  true;
    $find_user = $row["username"];
}

if ($succes){
    echo "Sukses Login : ". $find_user . PHP_EOL;
}else{
    echo "Gagal Login" .PHP_EOL;
}
$connetion = null;