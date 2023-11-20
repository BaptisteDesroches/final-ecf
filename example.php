<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="Baptiste Desroches" />
        <link href="style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js"></script>
        <title>Page d'accueil</title>
    </head>

    <body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from games');
while ($donnees = $reponse->fetch())
    {
?>

        <p><?php echo $donnees['title']; ?></p>
<?php
    }
    $reponse->closeCursor();//important
?>
    </body>
</html>