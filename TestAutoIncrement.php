<?php

require_once __DIR__. '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comment(email, comment) VALUES ('ach@test.com', 'hi' )");
$id = $connection->lastInsertId();

var_dump($id);
echo $id.PHP_EOL;

