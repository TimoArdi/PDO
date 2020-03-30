<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon ami PDO</title>
</head>
<body>
<?php require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);?>
<h1>Friends:</h1>
<ul>
<?php
foreach($friends as $friend) {
echo '<li>' . $friend['firstname'] . ' ' . $friend['lastname'] . ' <a href="delete.php?id=' . $friend['id'] . '">(delete)</a></li>';
}?>
</ul>
<h2> Do you want a new friend ?</h2>
<?php
require_once("validation.php");
if($_POST && count($errors) === 0 ){

    require_once("insert.php");
}
?>
<form action="index.php" method="post">
    <div>
        <label for="name"></label>
        <input type="text" id="name" name="lastname" placeholder="Lastname" required value="<?php if(isset($_POST['lastname'])) echo htmlentities($_POST['lastname']);?>">
    </div>
    <p><?php echo $errors['lastname1']; ?></p><p><?php echo $errors['lastname2']; ?></p>
    <div>
        <label for="firstname"></label>
        <input type="text" id="firstname" name="firstname" placeholder="Firstname" required value="<?php if(isset($_POST['firstname'])) echo htmlentities($_POST['firstname']);?>">
    </div>
    <p><?php echo $errors['firstname1']; ?></p><p><?php echo $errors['firstname2']; ?></p>
    <div class="button">
        <button type="submit">Have a new friend</button>
    </div>
</form>
</body>
</html>
