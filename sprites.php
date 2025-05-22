<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex - by zine-eddine</title>
    <link href="css/bootstrap.min.css.map" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="bg-danger">
<div class="container">


    <div class="container py-7">

        <div class="row g-4">
            <?php include 'navbar.php';
            ?>
        </div>
        <div style="width: 100%; height: 430px; overflow: hidden; margin-top: 200px">
            <img src="img/Screenshot%202025-05-22%20at%2013-28-01%20Sandslash%20Pokédex%20stats%20moves%20evolution%20&%20locations%20Pokémon%20Database.png"
                 class="w-100 h-100"
                 style="object-fit: cover;"
                 alt="Sandslash">
        </div>






        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>


