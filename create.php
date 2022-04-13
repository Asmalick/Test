<?php
require_once('cnx.php');
$message = '';

if (isset($_POST['create'])) {
    if(empty($_POST['nom'])) {
        $message ='<p class="msg-1">Remplissez ce champ svp! </p>';
    } else {
        $sql = "INSERT INTO equipage (nom) VALUES (?)";
        $rs_insert = $cnx->prepare($sql);
        $var_nom    = $_POST['nom'];
        $rs_insert->bindValue(1,$var_nom,PDO::PARAM_STR);

        $rs_insert->execute();
        $message = '<p class="msg-2">Bienvenue! </p>';
    }

 
    
}

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
<?=  $message; ?>
    <div class="equipier-1">
        <h1>Liste des equipiers</h1>
        <form action=""method="post">
            <input type="text" name="nom" placeholder="nom">
            <input type="submit" name="create" value="Inserer" />
           
        </form>
       
    </div>
</body>
</html>