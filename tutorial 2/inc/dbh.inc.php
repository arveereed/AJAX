<?php

$dsn = "mysql:host=localhost;dbname=db_sample_for_ajax";
$username = 'root';
$pwd = '';

try {
  $pdo = new PDO($dsn, $username, $pwd);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('Connection failed: ' . $e->getMessage());
}