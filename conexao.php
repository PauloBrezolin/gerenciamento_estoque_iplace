<?php
$host = 'localhost';
$port = '5432';
$dbname = 'produtos';
$user = 'postgres';
$password = '2022';

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>