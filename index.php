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

        <div class="row g-4">
            <div style="margin-top: 150px" class="col-md-4 text-center">
                <img src="img/sandslash.jpg" alt="Sandslash Profielfoto" class="img-fluid rounded-circle border shadow" style="width: 600px;">
            </div>

            <div class="col-md-8">
                <div class="card bg-danger-subtle mb-3">
                    <div class="card-header">
                        <h1 class="mb-0">Sandslash</h1>
                    </div>

                    <div class="card-body">
                        <h5 class="card-text">
                            Sandslash’s body is covered by tough spikes, which are hardened sections of its hide. Once a year, the old spikes fall out, to be replaced with new spikes that grow out from beneath the old ones.
                        </h5>


                        <ul class="list-unstyled mb-4">
                            <li><strong>Type:</strong> Ground<img style="width: 1rem" src="img/Pokémon_Ground_Type_Icon.svg.png"></li>
                            <li><strong>Height:</strong> 1.0 m</li>
                            <li><strong>Weight:</strong> 29.5 kg</li>
                            <li><strong>Special attack:</strong> Sandstorm Slash</li>
                            <li><strong>Abilities:</strong> Sand Veil / Sand Rush (hidden ability)</li>
                        </ul>


                        <div class="row">

                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><h2>Pokedex number №</h2></li>
                                    <li>0028 (Yellow/Red/Blue)</li>
                                    <li>0049 (Gold/Silver/Crystal)</li>
                                    <li>0113 (Ruby/Sapphire/Emerald)</li>
                                    <li>0028 (FireRed/LeafGreen)</li>
                                    <li>0049 (HeartGold/SoulSilver)</li>
                                    <li>0114 (Black 2/White 2)</li>
                                    <li>0098 (X/Y — Mountain Kalos)</li>
                                    <li>0118 (Omega Ruby/Alpha Sapphire)</li>
                                    <li>0252 (Sun/Moon — Alola dex)</li>
                                    <li>0329 (U.Sun/U.Moon — Alola dex)</li>
                                    <li>0028 (Let's Go Pikachu/Let's Go Eevee)</li>
                                    <li>0169 (The Isle of Armor)</li>
                                    <li>0117 (The Teal Mask)</li>
                                    <li>0156 (The Indigo Disk)</li>
                                </ul>
                            </div>


                            <div class="col-md-6 text-end">
                                <ul class="list-unstyled">
                                    <li><h2>Training</h2></li>
                                    <li>EV yield: 2 Defense</li>
                                    <li>Catch rate: 90 (11.8% with PokéBall, full HP)</li>
                                    <li>Base Friendship: 50 (normal)</li>
                                    <li>Base Exp.: 158</li>
                                    <li>Growth Rate: Medium Fast</li>
                                    <li class="mt-3"><h2>Breeding</h2></li>
                                    <li>Egg Groups: Field</li>
                                    <li>Gender: 50% male, 50% female</li>
                                    <li>Egg cycles: 20 (4,884–5,140 steps)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>



