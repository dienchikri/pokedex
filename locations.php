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

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>Game</th>
                <th>Location</th>
            </tr>
            </thead>
            <tbody>
            <tr><td class="text-danger">Red</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-primary">Blue</td><td>Route 23, Cerulean Cave</td></tr>
            <tr><td class="text-warning">Yellow</td><td>Cerulean Cave</td></tr>
            <tr><td class="text-success">Gold</td><td>Route 26, 27, Mt. Moon</td></tr>
            <tr><td class="text-secondary">Silver</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-info">Crystal</td><td>Route 26, Victory Road</td></tr>
            <tr><td class="text-danger">Ruby</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-primary">Sapphire</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-danger">FireRed</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-success">LeafGreen</td><td>Route 23, Victory Road</td></tr>
            <tr><td class="text-success">Emerald</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-secondary">Diamond</td><td>Route 228</td></tr>
            <tr><td class="text-primary">Pearl</td><td>Route 228</td></tr>
            <tr><td class="text-info">Platinum</td><td>Route 228</td></tr>
            <tr><td class="text-warning">HeartGold</td><td>Route 26, 27, Mt. Moon</td></tr>
            <tr><td class="text-dark">SoulSilver</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-primary">Black</td><td>Relic Castle</td></tr>
            <tr><td class="text-dark">White</td><td>Relic Castle</td></tr>
            <tr><td class="text-info">Black 2</td><td>Route 15, Relic Castle</td></tr>
            <tr><td class="text-success">White 2</td><td>Route 15, Relic Castle</td></tr>
            <tr><td class="text-danger">X</td><td>Route 18, Terminus Cave</td></tr>
            <tr><td class="text-primary">Y</td><td>Route 18, Terminus Cave</td></tr>
            <tr><td class="text-warning">Omega Ruby</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-info">Alpha Sapphire</td><td>Evolve Sandshrew</td></tr>
            <tr><td class="text-danger">Sun</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-primary">Moon</td><td>Evolve Sandshrew/Alolan Sandshrew</td></tr>
            <tr><td class="text-warning">Ultra Sun</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-dark">Ultra Moon</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-info">Let's Go Pikachu</td><td>Evolve Sandshrew/Alolan Sandshrew</td></tr>
            <tr><td class="text-success">Let's Go Eevee</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-danger">Sword</td><td>Evolve Sandshrew/Alolan Sandshrew</td></tr>
            <tr><td class="text-primary">Shield</td><td>Evolve Sandshrew/Alolan Sandshrew</td></tr>
            <tr><td class="text-warning">Brilliant Diamond</td><td>Trade/migrate from another game</td></tr>
            <tr><td class="text-info">Shining Pearl</td><td>Spacious Cave, Rocky Cave, Sandsear Cave, Big Bluff Cavern</td></tr>
            <tr><td class="text-muted">Legends: Arceus</td><td>Not available in this game</td></tr>
            <tr><td class="text-danger">Scarlet</td><td>Location data not yet available</td></tr>
            <tr><td class="text-primary">Violet</td><td>Location data not yet available</td></tr>
            </tbody>
        </table>



        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>


