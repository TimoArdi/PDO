<?php
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
$statement = $pdo->prepare($query);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->execute();
header("Location: index.php");


