<?php
// Démarrer/créer une session
session_start(); // PREMIERE INSTRUCTION
// Récupérer la variable de session "prenom"
$prenom = null;
if (isset($_SESSION["prenom"])) {
    $prenom = $_SESSION["prenom"];
}
// Récupérer la variable de session "utilisateur"
$utilisateur = null;
if (isset($_SESSION["utilisateur"])) {
    $utilisateur = $_SESSION["utilisateur"];
}

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
    <title>Les sessions</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="mt-5 text-warning text-center">Les sessions</h1>
    <h3>Récupération de la variable de la session "prenom"</h3>
    <?php if ($prenom) : ?>
        <p>Prénom : <?= $prenom ?></p>
    <?php endif; ?>
    <h3>Récupération de la variable de session "utilisateur"</h3>
    <?php if ($utilisateur) : ?>
        <p>Prénom : <?= $utilisateur['prenom'] ?></p>
        <p>Nom : <?= $utilisateur['nom'] ?></p>
        <p>Email : <?= $utilisateur['email'] ?></p>
    <?php endif; ?>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>