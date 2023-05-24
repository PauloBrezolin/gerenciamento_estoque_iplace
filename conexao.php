<?php
$host = 'localhost';
$port = '5432';
$dbname = 'produtos';
$user = 'postgres';
$password = '1234';

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
