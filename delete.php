<?php
require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$query = "DELETE FROM friend WHERE id =  :id";
$statement = $pdo->prepare($query);
$statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();
header("Location: index.php");