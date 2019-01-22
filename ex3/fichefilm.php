<?php

var_dump($_POST);

$host       = 'localhost'; // Hôte de la base de données
$dbname     = 'coursphp'; // Nom de la bdd
$port       = '3308'; // Ou 3308 selon la configuration
$login      = 'root'; // Par défaut dans WAMP
$password   = ''; // Par défaut dans WAMP (pour MAMP : 'root')

try {
    // Essaie de faire ce script...
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
}
catch (Exception $e) {
    // Sinon, capture l'erreur et affiche la
    die('Erreur : ' . $e->getMessage());
}

$req = "SELECT * FROM moviesthomas WHERE id = " . $_POST['title'];

$res = $bdd->query($req);

$f = $res->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $f['title']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>Titre : <?= $f['title']; ?></li>
                    <li>Acteurs : <?= $f['actors']; ?></li>
                    <li>Réalisateur : <?= $f['director']; ?></li>
                    <li>Producteur : <?= $f['producer']; ?></li>
                    <li>Année : <?= $f['year_of_prod']; ?></li>
                    <li>Langue : <?= $f['lang']; ?></li>
                    <li>Genre : <?= $f['category']; ?></li>
                    <li>Résumé : <?= $f['storyline']; ?></li>
                    <li>Vidéo : <?= $f['video']; ?></li>
                </ul>

                <a href="listfilms.php">Retour à la liste</a>
            </div>
        </div>
    </div>
</body>
</html>
