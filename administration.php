<?php
$bdd = new PDO('mysql:host=localhost;dbname=administration;charset=utf8', 'root', '');

$membres = $bdd ->query ('SELECT * FROM membres ORDER BY id DESC');
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>accueil</title>
    <meta charset="UTF-8">
</head>

<body>

  





</body>
</html>
