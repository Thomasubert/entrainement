<?php


/* var_dump($_POST); */



$host       = 'localhost'; // Hôte de la base de données
$dbname     = 'coursphp'; // Nom de la bdd
$port       = '3308'; // Ou 3308 selon la configuration
$login      = 'root'; // Par défaut dans WAMP
$password   = ''; // Par défaut dans WAMP (pour MAMP : 'root')
/**
 * Je me connecte à la base de données
 */

try {
    // Essaie de faire ce script...
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
}
catch (Exception $e) {
    // Sinon, capture l'erreur et affiche la
    die('Erreur : ' . $e->getMessage());
}

/* TITRE */
if(empty($_POST['title']) ) {
    echo "Le champ titre ne peut pas être vide";
}
elseif(strlen($_POST['title']) < 5) {
    echo "Le modèle doit faire au moins 5 caractères";
}
else {
    $title = $_POST['title'];
}

/* ACTEURS */

if(empty($_POST['actors']) ) {
    echo "Le champ acteurs ne peut pas être vide";
}
elseif(strlen($_POST['actors']) < 5) {
    echo "Le champ acteurs doit faire au moins 5 caractères";
}
else {
    $actors = $_POST['actors'];
}


/* REALISATEUR */

if(empty($_POST['director']) ) {
    echo "Le champ réalisateur ne peut pas être vide";
}
elseif(strlen($_POST['director']) < 5) {
    echo "Le réalisateur doit faire au moins 5 caractères";
}
else {
    $director = $_POST['director'];
}



/* PRODUCTEUR */

if(empty($_POST['producer']) ) {
    echo "Le champ titre ne peut pas être vide";
}
elseif(strlen($_POST['producer']) < 5) {
    echo "Le modèle doit faire au moins 5 caractères";
}
else {
    $producer = $_POST['producer'];
}



/* Année de production */

if(empty($_POST['year_of_prod']) ) {
    echo "Le champ année de production ne peut pas être vide";
}
else {
    $year_of_prod = $_POST['year_of_prod'];
}


/* LANGUE */

if(empty($_POST['lang']) ) {
    $lang = null;
}
else {
    $lang = $_POST['lang'];
}



/* GENRE */


if(empty($_POST['category']) ) {
    echo "Le champ ne peut pas être vide";
}
else {
    $category = $_POST['category'];
}


/* RESUME */

if(empty($_POST['storyline']) ) {
    echo "Le champ résumé ne peut pas être vide";
}

elseif(strlen($_POST['storyline']) < 5) {
    echo "Le résumé doit faire au moins 5 caractères";
}
else {
    $storyline = $_POST['storyline'];
}



/* LIEN VIDEO */

if(empty($_POST['video']) ) {
    $video = null;
}
else {
    $video = $_POST['video'];
}




/* On met les infos saisies dans la BDD */

if ( !$title || !$director || !$producer || !$year_of_prod || !$category || !$storyline ) {
    echo "Le titre, le réalisateur, l'année de production et le genre sont obligatoires.";

}
else {

    $req = 'INSERT INTO moviesthomas(title, actors, director, producer, year_of_prod, lang, category, storyline, video)
            VALUES(:title, :actors, :director, :producer, :year_of_prod, :lang, :category, :storyline, :video)';

    $res = $bdd->prepare($req);

    $res->execute([
        'title'         => $title,
        'actors'        => $actors,
        'director'      => $director,
        'producer'      => $producer,
        'year_of_prod'  => $year_of_prod,
        'lang'          => $lang,
        'category'      => $category,
        'storyline'     => $storyline,
        'video'         => $video

    ]);
      
    echo "Le film a bien été ajouté à la base de données";

    var_dump($bdd->errorInfo());

}