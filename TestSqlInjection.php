<?php

require_once __DIR__.'/GetConnection.php';

$connetion = getConnection();

$username = $connetion->quote("admin'; #");
$password = $connetion->quote("admin");

$sql = "SELECT * FROM admin where username = $username and password = $password";
echo $sql .PHP_EOL;

$statement =  $connetion->query($sql);

$succes = false;
$find_user = null;

foreach ($statement as $row){
    //sukses
    $succes = true;
    $find_user = $row["username"];
}

if ($succes){
    echo "Sukses login : ".$find_user . PHP_EOL;
}else{
    echo "Gagal Login" . PHP_EOL;
}