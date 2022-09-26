<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();


$connection->beginTransaction();
$connection->exec("INSERT INTO comment(email, comment) VALUES ('fikri@test.com', 'hi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('fikri@test.com', 'hi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('fikri@test.com', 'hi')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('fikri@test.com', 'hi')");

$connection->rollBack();

$connection = null;