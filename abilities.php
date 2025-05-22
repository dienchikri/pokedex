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


        <div style="margin-top: 10px" class="col-md-8" >
            <h2 class="mb-3 ">Sandslash stats</h2>
            <table class="table table-sm table-hover align-middle mb-0">
                <tbody>
                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1" style="width: 60px;">HP</th>
                    <td class="py-1 px-1 text-end" style="width: 40px;">75</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">260</div>
                                <div class="px-1 text-end" style="min-width: 40px;">354</div>
                            </div>
                        </div>
                    </td
                </tr>

                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1">Attack</th>
                    <td class="py-1 px-1 text-end">100</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">184</div>
                                <div class="px-1 text-end" style="min-width: 40px;">328</div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1">Defense</th>
                    <td class="py-1 px-1 text-end">110</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">202</div>
                                <div class="px-1 text-end" style="min-width: 40px;">350</div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1">Sp.Atk</th>
                    <td class="py-1 px-1 text-end">45</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width: 30%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">85</div>
                                <div class="px-1 text-end" style="min-width: 40px;">207</div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1">Sp.Def</th>
                    <td class="py-1 px-1 text-end">55</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width: 35%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">103</div>
                                <div class="px-1 text-end" style="min-width: 40px;">229</div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="table-dark align-middle">
                    <th scope="row" class="py-1 pe-1">Speed</th>
                    <td class="py-1 px-1 text-end">65</td>
                    <td class="py-1 px-1" colspan="2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-0">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="d-flex ms-2">
                                <div class="px-1 text-end" style="min-width: 40px;">121</div>
                                <div class="px-1 text-end" style="min-width: 40px;">251</div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="table-dark fw-bold">
                    <td>Total</td>
                    <td class="text-end">450</td>
                    <td colspan="2" class="text-end">Min / Max</td>
                </tr>
                </tbody>
            </table>
        </div>


        <div class="container my-4">
            <h2 class="mb-3">Sandslash moveset</h2>

            <h3>Moves Learned by Level Up</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>Lv.</th>
                        <th>Move</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Power</th>
                        <th>Accuracy</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>1</td><td>Crush Claw</td><td>Normal</td><td>Physical</td><td>75</td><td>95</td></tr>
                    <tr><td>1</td><td>Defense Curl</td><td>Normal</td><td>Status</td><td>—</td><td>—</td></tr>
                    <tr><td>1</td><td>Poison Sting</td><td>Poison</td><td>Physical</td><td>15</td><td>100</td></tr>
                    <tr><td>1</td><td>Sand Attack</td><td>Ground</td><td>Status</td><td>—</td><td>100</td></tr>
                    <tr><td>1</td><td>Scratch</td><td>Normal</td><td>Physical</td><td>40</td><td>100</td></tr>
                    <tr><td>9</td><td>Rollout</td><td>Rock</td><td>Physical</td><td>30</td><td>90</td></tr>
                    <tr><td>12</td><td>Fury Cutter</td><td>Bug</td><td>Physical</td><td>40</td><td>95</td></tr>
                    <tr><td>15</td><td>Rapid Spin</td><td>Normal</td><td>Physical</td><td>50</td><td>100</td></tr>
                    <tr><td>18</td><td>Bulldoze</td><td>Ground</td><td>Physical</td><td>60</td><td>100</td></tr>
                    <tr><td>21</td><td>Swift</td><td>Normal</td><td>Special</td><td>60</td><td>∞</td></tr>
                    <tr><td>26</td><td>Fury Swipes</td><td>Normal</td><td>Physical</td><td>18</td><td>80</td></tr>
                    <tr><td>31</td><td>Sand Tomb</td><td>Ground</td><td>Physical</td><td>35</td><td>85</td></tr>
                    <tr><td>36</td><td>Slash</td><td>Normal</td><td>Physical</td><td>70</td><td>100</td></tr>
                    <tr><td>41</td><td>Dig</td><td>Ground</td><td>Physical</td><td>80</td><td>100</td></tr>
                    <tr><td>46</td><td>Gyro Ball</td><td>Steel</td><td>Physical</td><td>—</td><td>100</td></tr>
                    <tr><td>51</td><td>Swords Dance</td><td>Normal</td><td>Status</td><td>—</td><td>—</td></tr>
                    <tr><td>56</td><td>Sandstorm</td><td>Rock</td><td>Status</td><td>—</td><td>—</td></tr>
                    <tr><td>61</td><td>Earthquake</td><td>Ground</td><td>Physical</td><td>100</td><td>100</td></tr>
                    </tbody>
                </table>
            </div>





            <h3 class="mt-4">Moves Learned via TM</h3>
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-bordered table-sm table-hover">
                    <thead class="table-warning">
                    <tr>
                        <th>TM</th><th>Move</th><th>Type</th><th>Category</th><th>Power</th><th>Accuracy</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td>01</td><td>Take Down</td><td>Normal</td><td>Physical</td><td>90</td><td>85</td></tr>
                    <tr><td>04</td><td>Agility</td><td>Psychic</td><td>Status</td><td>—</td><td>—</td></tr>
                    <tr><td>05</td><td>Mud-Slap</td><td>Ground</td><td>Special</td><td>20</td><td>100</td></tr>
                    <tr><td>07</td><td>Protect</td><td>Normal</td><td>Status</td><td>—</td><td>—</td></tr>
                    <tr><td>12</td><td>Low Kick</td><td>Fighting</td><td>Physical</td><td>—</td><td>100</td></tr>
                    <!-- Continue for all other TMs as needed -->
                    </tbody>
                </table>
            </div>
        </div>



        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>


