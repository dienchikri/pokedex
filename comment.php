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
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4>leave a comment for Sandslash</h4>
                    <form >
                        <div class="mb-1">

                            <input type="text" class="form-control" id="name" placeholder="your name">
                        </div>

                        <div class="mb-1">

                            <input type="text" class="form-control" id="email" placeholder="your email">
                        </div>

                        <div class="mb-1">

                            <textarea class="form-control" id="message" rows="4" placeholder="Type your comment here..."></textarea>
                        </div>
                        <button type="button" class="btn btn-outline-success  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            </svg></button>
                    </form>
                </div>
            </div>
        </div>



        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>


