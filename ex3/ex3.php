<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Films</title>
</head>
<body>
    
    
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                
                    <form action="metfilm.php" method="post" class="form">
                    
                    <label for="title">Titre</label>
                    <input id="title" type="text" class="form-control" name="title" required>

                    <label for="actors">Acteurs</label>
                    <input id="actors" type="text" class="form-control" name="actors">

                    <label for="director">Réalisateur</label>
                    <input id="director" type="text" class="form-control" name="director" required>

                    <label for="producer">Producteur</label>
                    <input id="producer" type="text" class="form-control" name="producer">

                    <label for="year_of_prod">Année de production</label>
                    <select id="year_of_prod" class="form-control" name="year_of_prod" required>

                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>


                    </select>

                    <label for="lang">Langue</label>
                    <select id="lang" class="form-control" name="lang">

                        <option value="anglais">Anglais</option>
                        <option value="francais">Français</option>
                        <option value="italien">Italien</option>


                    </select>

                    <label for="category">Genre</label>
                    <select id="category" class="form-control" name="category" required>

                        <option value="horreur">Horreur</option>
                        <option value="action">Action</option>
                        <option value="comedie">Comédie</option>
                        <option value="sci-fi">Science-fiction</option>

                    </select>

                    
                    <label for="storyline">Résumé</label>
                    <textarea class="form-control rounded-0" id="storyline" rows="10" name="storyline"></textarea>

                    <label for="video">Lien BA</label>
                    <input id="video" type="text" class="form-control" name="video">



                    <br>

                    <button class="btn btn-success" type="submit">Envoyer</button>
                    
                    
                    </form>
                
                </div>
            </div>
        </div>
    </div>

</body>
</html>