<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/css/vapor-bootstrap.min.css" rel="stylesheet">
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
    <title>Accueil</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Accueil</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">PHP ...</h3>
    </div>
    <p>Ce cours est une introduction au développement d'applications WEB avec le langage PHP.</p>
    <p>PHP permet de développer des sites web <span class="fs-4 text-success">dynamiques</span>.</p>
    <p>A l'inverse, des sites développés uniquement avec HTML/CSS sont des sites <span class="fs-4 text-success">statiques</span>.
    </p>
    <h4 class="text-warning">Sites statiques</h4>
    <p class="text-">
        Un <span class="fw-bold">site statique</span> est composé de pages web dont le contenu est fixe et ne change pas
        automatiquement. Chaque page est un fichier HTML codé directement et ne change pas sauf si un développeur met à
        jour manuellement le fichier HTML. Ces sites sont souvent plus rapides à charger car ils peuvent être
        directement servis par le serveur web
        sans traitement supplémentaire. Cependant, ils sont moins flexibles pour présenter du contenu personnalisé à
        l'utilisateur. </p>
    <p>Les sites statiques sont idéaux pour des contenus qui ne nécessitent pas de mises à jour
        fréquentes ou pour des sites avec une complexité minimale.
    </p>
    <h4 class="text-warning">Sites dynamiques</h4>
    <p class="text-">
        Un <span class="fw-bold">site dynamique</span>, en revanche, utilise des langages (PHP, Python, Java, etc.) pour
        générer le contenu de la page web à la volée (génération du code HTML). Cela signifie que le contenu peut être
        personnalisé pour
        l'utilisateur ou changé dynamiquement en fonction de l'interaction de l'utilisateur avec le site web.</p>
    <p>
        Les sites dynamiques sont plus complexes à développer et à héberger car ils nécessitent non seulement un serveur
        web mais aussi l'interpréteur de langage côté serveur et, souvent, une base de données.
    </p>
</div>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>