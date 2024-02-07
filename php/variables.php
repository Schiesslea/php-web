<?php
$nom = "Dupond";
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
    <title>PHP-Variables</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Les variables</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Contexte</h3>
    </div>
    <div>
        <p>Soit la variable suivante : </p>
        <div class="text-success fw-bold">
            <p>$nom = 'Dupond' ;</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Exemples</p>
        </div>
        <div class="col-7 bg-dark p-3 shadow">
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->
                    <p><?php echo "Bonjour je m'appelle $nom" ?></p>
                    <p><?= "Bonjour je m'appelle $nom" ?></p>
                    <p> Bonjour je m'appelle <?= $nom ?></p>
                    <p> Bonjour je m'appelle <?php echo $nom ?></p>
                    <p> Bonjour je m'appelle <?= strtoupper($nom) ?></p>
                    <p> Il y a <?= strlen($nom) ?> caractères dans le nom <?= $nom ?></p>
                    <p> Il y a <span class="fw-bold text-success "><?= strlen($nom) ?></span> caractères dans le nom
                        <span class="text-uppercase fst-italic"><?= $nom ?></span></p>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>