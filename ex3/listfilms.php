
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de chaussures</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    
  

        <?php

            $host       = 'localhost';  // Hôte de la base de données
            $dbname     = 'coursphp';  // Nom de la bdd
            $port       = '3308';       // Ou 3308 selon la configuration
            $login      = 'root';       // Par défaut dans WAMP
            $password   = '';           // Par défaut dans WAMP (pour MAMP : 'root')

            try {
                $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            // Ma requête à la BDD
            $request = 'SELECT * FROM moviesthomas ORDER BY title';

            // Je questionne (->query()) l'instance de base de données ($bdd) avec ma requête ($request)
            $response = $bdd->query($request);

            // Array qui contiendra les données requêtées
            $movies = [];

            // Tant que j'arrive à aller chercher (fetch) des lignes qui rentreront dans $donnees :
            while($donnees = $response->fetch() ) {

                // Je met ma ligne ($donnees) dans mon tableau $shoes
                $moviesthomas[] = $donnees;
            }


        ?>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    
                    
                        <table class="table">

                            <tr>
                                <th>Titre</th>
                
                                <th>Réalisateur</th>
                
                                <th>Année</th>
                    
                            </tr>
                                <?php foreach($moviesthomas as $f) { ?>

                                    <tr>
                                        <td><?= $f['title']; ?></td>
                                        <td><?= $f['director']; ?></td>
                                        <td><?= $f['year_of_prod']; ?></td>
                            
                                        <td>
                                            <a href="fichefilm.php?id=<?= $f['id']; ?>" class="btn btn-primary">Plus d'infos</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                

                        </table>
                    
                    
                    </div>
                </div>
            </div>
        </div>
        

        <a class="btn btn-primary" href="ex3.php">Ajouter</a>

</body>
</html>