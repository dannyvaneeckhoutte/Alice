<?php
$dsn = 'mysql:host=localhost;dbname=alice';
$username = 'root';
$password = '';

try {
$connection = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
   echo $e->getMessage();
   die("Verbinding mislukt: " . $e->getMessage());
}