<?php
$pays = ["France", "Italie", "Espagne", "Belgique"];
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
    <title>PHP-Boucles</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Les boucles et les tableaux</h1>
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Contexte</h3>
    </div>
    <div>
        <p>Soit le tableau suivant : </p>
        <div class="text-success fw-bold">
            <p>$pays = ["France", "Italie", "Espagne", "Belgique"];</p>
        </div>
    </div>
    <div class="d-flex mt-5 ">
        <i class="bi bi-2-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Afficher le contenu du tableau <span
                    class="text-success">$pays</span></h3>
    </div>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <p class="fs-1">Version for </p>
        </div>
        <div class="col-7 bg-dark  rounded-3 p-3 shadow">
            <p>Soit $tab un tableau : </p>
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php for ($i = 0; $i &lt; count($tab); $i++) {
                    <span class="text-success">// instructions (en PHP) </span>
                    echo "&lt;p>$tab[$i]&lt;/p>";
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
            <p class="fs-1">Version for alternative</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow">
            <p>Soit $tab un tableau : </p>
            <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                &lt;?php for($i=0; $i&lt;count($tab); $i++) : ?&gt;
                    <span class="text-success">// instructions (en HTML) </span>
                    &lt;p>$tab[$i]&lt;/p>
                &lt;?php endfor; ?&gt;
            </code>
            </pre>
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->

                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-start mt-5">
            <div class="col-3 text-center me-4">
                <p class="fs-1">Version foreach</p>
            </div>
            <div class="col-7 bg-dark rounded-3 p-3 shadow">
                <p>Soit $tab un tableau : </p>
                <pre class="bg-primary border rounded-4 text-white fw-bold">
                <code>
                  &lt;?php foreach($tab as $valeur) {
                      <span class="text-success">// instructions (en PHP) </span>
                      echo "&lt;p>$valeur&lt;/p>";
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
                <p class="fs-1">Version foreach alternative</p>
            </div>
            <div class="col-7 bg-dark  p-3 shadow">
                <p>Soit $tab un tableau : </p>
                <pre class="bg-primary border rounded-4 text-white fw-bold">
                    <code>
                    &lt;?php foreach($tab as $valeur) : ?&gt;
                       <span class="text-success">// instructions (en HTML) </span>
                       &lt;p>&lt;?= $valeur ?&gt;&lt;/p>
                    &lt;?php endforeach; ?&gt;
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

        <!-- Exercices -->

        <div class="d-flex mt-5 ">
            <i class="bi bi-3-square fs-3 text-warning me-3"></i>
            <h3 class="border-bottom border-warning border-1">Exercices</h3>
        </div>
        <div class="row justify-content-center align-items-start mt-5">
            <div class="col-3 text-center me-4">
                <p class="fs-1"><i class="bi bi-1-circle"></i></p>
            </div>
            <div class="col-7 bg-dark p-3 shadow">
                <p>Afficher le tableau <span class="text-success">$pays</span> sous la forme d'une liste non ordonnée
                </p>
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
                <p class="fs-1"><i class="bi bi-2-circle"></i></p>
            </div>
            <div class="col-7 bg-dark  rounded-3 p-3 shadow">
                <p>Afficher le tableau <span class="text-success">$pays</span> sous la forme d'une table
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
