<!--Déclaration d'une personne-->
<?php
//Déclaration d'une personne
$nom = 'Dupond';
$age = 17;
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
    <title>PHP-Conditions</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Les structures conditionnelles</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Contexte</h3>
    </div>
    <div>
        <p>Soit les variables suivantes : </p>
        <div class="text-success fw-bold">
            <p>$nom = 'Dupond' ;</p>
            <p>$age = 17 ;</p>
        </div>
    </div>
    <div class="d-flex mt-5 ">
        <i class="bi bi-2-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Déterminer si la personne est majeure ou mineure
            !</h3>
    </div>

    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Version 1 syntaxe classique</p>
        </div>
        <div class="col-7 bg-dark  rounded-3 p-3 shadow">
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php if (condition) {
                    <span class="text-success">// instructions (en PHP) </span>
                } else {
                    <span class="text-success">// instructions (en PHP) </span>
                } ?&gt;
                </code>
            </pre>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Version 2 syntaxe classique</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow">
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php if (condition) { ?&gt;
                    <span class="text-success">// instructions (en HTML) </span>
                &lt;?php } else { ?&gt;
                    <span class="text-success">// instructions (en HTML) </span>
                &lt;?php } ?&gt;
                </code>
            </pre>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Version 3 syntaxe alternative</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow">
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php if (condition) : ?&gt;
                    <span class="text-success">// instructions (en HTML) </span>
                &lt;?php else : ?&gt;
                    <span class="text-success">// instructions (en HTML) </span>
                &lt;?php endif; ?&gt;
                </code>
            </pre>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Version 4 ternaire</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow">
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php (condition) ? valeurSiVraie : valeurSiFausse ?&gt;
                &lt;?php $var = (condition) ? valeurSiVraie : valeurSiFausse ?&gt;
                </code>
            </pre>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5 ">
        <i class="bi bi-3-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Exercices</h3>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">1</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow">
            <p class="fw-bold text-white">
                Ecrire "$nom est majeur" <br>
                Le mot "majeur" doit être écrit en vert si "$nom" est majeur ou en rouge s'il est mineur
            </p>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>