<?php

$dsn = 'mysql:hots=localhost;dbname=php_pdo';
$dbUser = 'root';
$dbPassword = 'dev123';


$connection = new PDO(
  $dsn,
  $dbUser,
  $dbPassword
);
echo ('teste');
