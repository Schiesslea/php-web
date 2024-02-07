<?php
// Récupérer la liste des étudiants dans la table etudiant

// 1. Connexion à la base de donnée db_intro
/**
 * @var PDO $pdo
 */
require '../config/db-config.php';

// 2. Préparation de la requête
$requete = $pdo->prepare(query: "SELECT * FROM etudiant");

// 3. Exécution de la requête
$requete->execute();

// 4. Récupération des enregistrements
// Un enregistrement = un tableau associatif
$etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);
?>


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
    <title>TP - BD</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Travaux pratiques - Bases de données</h1>

    <!--    Enoncé -->
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Enoncé</h3>
    </div>
    <div class="my-3">
        <p>Afficher le contenu de la table SQL etudiant sous la forme d'un tableau HTML </p>
    </div>
    <div class="text-center">
        <h4>Schéma de la table etudiant</h4>
        <img src="../assets/images/table-etudiant.png" alt="tab" class="img-fluid">
    </div>

    <div class="bg-dark p-3 shadow rounded-4">
        <div class="d-flex mt-2">
            <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
            <div class="bg-black rounded-4 p-3 flex-fill">
                <!-- Votre code -->

            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>