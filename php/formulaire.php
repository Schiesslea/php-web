<?php
// Déterminer si le formulaire a été soumis
// Utilisation d'une variable superglobale $_SERVER
// $_SERVER : tableau associatif contenant des informations sur la requête HTTP
$erreurs = [];
$prenom = "";
$nom = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Le formulaire a été soumis !
    // Traiter les données du formulaire
    // Récupérer les valeurs saisies par l'utilisateur
    // Suoerglobale $_POST : tableau associatif
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];


    // Validation des données
    if (empty($prenom)) {
        $erreurs['prenom'] = "Le prénom est oligatoire !";
    }
    if (empty($nom)) {
        $erreurs['nom'] = "Le nom est oligatoire !";
    }
    if (empty($email)) {
        $erreurs['email'] = "L'email est oligatoire !";
    } elseif (!filter_var($email, filter: FILTER_VALIDATE_EMAIL)) {
        $erreurs['email'] = "L'email n'est pas valide !";
    }


    // Traiter les données
    if (empty($erreurs)) {
        // Traitement des données (insertion dans une base de données)
        // Rediriger l'utilisateur vers une autre page du site (page d'accueil)
        header("Location: ../index.php");
        exit();
    }
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
    <title>Formulaire</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1>Formulaire</h1>
    <div class="w-50 mx-auto shadow my-5 p-4 bg-light">
        <form action="" method="post" novalidate>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['prenom'])) ? "border border-2 border-danger" : "" ?>"
                       id="prenom" name="prenom" value="<?= $prenom ?>" placeholder="Saisir votre prénom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['prenom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['prenom'] ?></p>
                <?php endif; ?>


            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom*</label>
                <input type="text"
                       class="form-control <?= (isset($erreurs['nom'])) ? "border border-2 border-danger" : "" ?>"
                       id="nom"
                       name="nom" value="<?= $nom ?>" placeholder="Saisir votre nom"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['nom'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['nom'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email"
                       class="form-control <?= (isset($erreurs['email'])) ? "border border-2 border-danger" : "" ?>"
                       id="email" name="email" value="<?= $email ?>" placeholder="Saisir un email valide"
                       aria-describedby="emailHelp">
                <?php if (isset($erreurs['email'])) : ?>
                    <p class="form-text text-danger"><?= $erreurs['email'] ?></p>
                <?php endif; ?>
                <div id="emailHelp" class="form-text">Ne partagez jamais votre adresse email</div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>
</body>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</html>