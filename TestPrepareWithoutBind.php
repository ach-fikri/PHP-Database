<?php

require_once __DIR__. '/GetConnection.php';

$connetion = getConnection();

$username = "rina";
$password = "admin";

$sql =  "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement =  $connetion->prepare($sql);
$statement->execute([$username, $password]);
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

$sql =  "INSERT INTO admin (username, password) VALUES (:username, :password)";
$statement =  $connetion->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connetion = null;