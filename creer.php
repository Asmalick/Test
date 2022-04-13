<?php
require_once('cnx.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testeur</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="testeur-1">
    <h1>Liste des testeurs</h1>
        <form action=""method="post">
            <input type="text" name="Nom" placeholder="Nom">
            <input type="text" name="Prénom" placeholder="Prénom">
            <input type="text" name="Age" placeholder="Age">
            <input type="submit" name="Insérer" placeholder="insérer">
        </form>
    </div>
    <p><a href="creer.php">Créer un nouveau testeur</a> </p> 
</body>
</html>