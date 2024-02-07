<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/vapor-bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Gluten', cursive;
        }
    </style>
    <title>Notions fondamentales</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Notions fondamentales</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Un peu de théorie...</h3>
    </div>
    <div>
        <p>Un <span class="fs-4 text-success">site web</span> doit être accessible pour être utilisé. <br>Pour cela il
            doit
            être <span class="fs-4 text-success">déployé</span> dans un <span
                    class="fs-4 text-success">serveur web </span>(copie des fichiers du site vers le serveur web).</p>
        <p>Une fois <span class="fs-4 text-success">déployé</span>, on le rend accessible aux utilisateurs ciblés : le
            site est <span class="fs-4 text-success">hébergé</span>. </p>


        <p><span class="fs-4 text-success">Un site web</span> est composé de plusieurs <span class="fs-4 text-success">pages</span>
            (ex: pages HTML/PHP).
        </p>
        <p>Une page est appelée une <span class="fs-4 text-success">ressource</span>.</p>
        <p>Pour accéder à une ressource, il faut connaître : </p>
        <ul>
            <li>le protocole utilisé (HTTP/HTTPS) : communication client/serveur</li>
            <li>sa localisation (adresse IP du serveur/nom de domaine + port du serveur web)</li>
            <li>son nom (ex : accueil.php)</li>
        </ul>
        <p>Ces informations sont regroupées sous la forme d'une <span class="fs-4 text-success">URL</span> (Uniform
            Resource Locator) </p>
        <p class="text-center border border-2 border-warning p-2">Le format d'une URL est le suivant <br>
            <span class="text-success fs-2">protocole://domaine:port/nom_ressource</span> <br>
            <span class="fs-3">   Ex : http://www.lyceepergaud.fr/accueil.php</span>
        </p>
        <p>Lorsque l'on souhaite accéder à une ressource (une page html/php), on doit préciser : </p>
        <ul>
            <li>son <span class="text-success fs-4">URL</span></li>
            <li>la méthode HTTP : la méthode <span class="text-success fs-4">GET</span></li>
        </ul>
        <p>Le protocole HTTP propose différentes manières d'utiliser une ressource : </p>
        <ul>
            <li>Récupérer une ressource : methode <span class="text-success fs-4">GET</span></li>
            <li>Créer une ressource : methode <span class="text-success fs-4">POST</span></li>
            <li>Modifier une ressource : methode <span class="text-success fs-4">PUT</span></li>
            <li>Supprimer une ressource : methode <span class="text-success fs-4">DELETE</span></li>
        </ul>

        <p>Quand on accède à une ressource (page HTML/PHP d'un site WEB) depuis un navigateur, celui-ci utilise <span
                    class="text-uppercase">par défaut</span> la méthode <span class="text-success fs-4">GET</span>.
        </p>
        <p class="text-center border border-2 border-warning p-2">Exemple <br>
            <span class="fs-3 text-success"> GET  http://www.lyceepergaud.fr/accueil.php</span>
        </p>
        <p>L'accès à une ressource (depuis le navigateur) déclenche la soumission d'une <span class="text-success fs-4">requête HTTP</span>
            vers le seveur Web.
            <br>
            Cette requête :
        </p>
        <ul>
            <li>contient (entre autre) l'URL et la méthode utilisée pour traiter la ressource (ici GET);</li>
            <li>est déclenchée de différentes manières, par exemple, en tapant l'adresse (URL) d'une page web, en
                soumettant un formulaire ou en cliquant sur un lien.
            </li>
        </ul>
        <p>La requête est ensuite traitée par le serveur WEB. Celui-ci extrait de la requête l'URL afin d'identifier la
            ressource qui doit être traitée. <br>
            La méthode est également extraite afin de savoir QUOI FAIRE avec la ressource. Dans le cas de GET (cas le
            plus courant), le serveur renvoie une <span class="text-success fs-4">réponse  HTTP</span> contenant la
            ressource demandée au format HTML.
        </p>

        <div class="d-flex mt-5 ">
            <i class="bi bi-2-square fs-3 text-warning me-3"></i>
            <h3 class="border-bottom border-warning border-1">Traitement d'une page PHP</h3>
        </div>
        <p>Le navigateur envoie une <span class="text-success fs-4">requête HTTP</span> au serveur web contenant l'URL
            d'une <span class="text-success fs-4">ressource PHP</span> et la méthode GET.</p>
        <p>Le serveur WEB reçoit la requête HTTP et détermine que la ressource demandée est une page PHP.</p>
        <p>Le serveur WEB passe alors le fichier PHP à l'<span class="text-success fs-4">interpréteur PHP</span>.
            Celui-ci exécute le script PHP ligne par ligne.</p>
        <p>Une fois exécuté, l'interpréteur génère en sortie le code HTML (résultat de l'exécution du code PHP).</p>
        <p class="text-center border border-2 border-warning p-2 text-success fs-2">
            LE CODE PHP EST DONC EXECUTE COTE SERVEUR !
        </p>
        <p>Le serveur WEB créé une <span class="text-success fs-4">réponse HTTP</span> dans laquelle le code HTML est
            inséré puis l'envoie en retour au navigateur.
        </p>
        <p>
            Le navigateur reçoit la réponse HTTP et interprète le contenu HTML pour afficher la page résultante à
            l'utilisateur.
        </p>


    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>