<?php
    echo $_GET['nom'] . "\n"; // Affiche 'Jean'
    echo $_GET['age'] . "\n"; // Affiche '25'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>nom : <?= $_GET['nom'] ?> </p>
    <p>age : <?= $_GET['age'] ?> </p>   
</body>
</html>
