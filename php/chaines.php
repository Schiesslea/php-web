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
    <title>PHP-Chaines</title>
</head>
<body>
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Les chaines de caractères</h1>
    <div class="row justify-content-center align-items-start mt-5">
        <div class="col-3 text-center me-4">
            <!--            <img src="../assets/images/php.jpg" class="img-fluid rounded-circle" alt="">-->
            <p class="fs-1">Exemples</p>
        </div>
        <div class="col-7 bg-dark rounded-3 p-3 shadow ">
            <div class="d-flex">
                <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
                <div class="bg-black rounded-4 p-3 flex-fill">
                    <!-- Votre code -->
                    <p>Les chaines de caractères en PHP</p>
                    <?php echo "Les chaines de caractères en PHP"; ?>
                    <?php echo "<p>Les chaines de caractères en PHP</p>"; ?>
                    <p><?php echo "Les chaines de caractères en PHP"; ?></p>
                    <p><?= "Les chaines de caractères en PHP" ?></p>
                    <?= "<p>Les chaines de caractères en PHP</p>"?>
                    <p><?= "Les chaines " . "de caractères en PHP"?></p>
                    <p>Aujourd'hui nous sommmes le <?= date("d/m/y"); ?></p>
                    <p>Aujourd'hui nous sommmes le <span class="text-success fs-3"> <?= date("d/m/y"); ?></span>  </p>
                </div>
            </div>

        </div>
    </div>

</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>