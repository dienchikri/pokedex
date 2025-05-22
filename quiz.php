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


            <style>
                body {
                    background-color: #f0f2f5;
                    padding: 30px;
                }

                .quiz-container {
                    max-width: 800px;
                    margin: auto;
                }

                .question-card {
                    margin-bottom: 20px;
                }

                .result-box {
                    display: none;
                }
            </style>
        </head>
        <body>

        <div class="quiz-container">
            <h1 class="mb-4 text-center ">Sandslash Quiz</h1>
            <!-- Result box at top -->
            <div class="result-box alert alert-success text-center" id="resultBox">
                You got <strong id="correctCount">0</strong> out of 10 correct!
            </div>



            <form id="quizForm">

                <!-- Question 1 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>1. What type is Sandslash (Kanto form)?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q1" value="a" id="q1a"><label class="form-check-label" for="q1a">Water</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q1" value="b" id="q1b"><label class="form-check-label" for="q1b">Ground</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q1" value="c" id="q1c"><label class="form-check-label" for="q1c">Rock</label></div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>2. Sandslash evolves from which Pokémon?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q2" value="a" id="q2a"><label class="form-check-label" for="q2a">Diglett</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q2" value="b" id="q2b"><label class="form-check-label" for="q2b">Sandshrew</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q2" value="c" id="q2c"><label class="form-check-label" for="q2c">Geodude</label></div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>3. What is the Alolan form of Sandslash’s type?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q3" value="a" id="q3a"><label class="form-check-label" for="q3a">Ice/Steel</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q3" value="b" id="q3b"><label class="form-check-label" for="q3b">Ground/Steel</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q3" value="c" id="q3c"><label class="form-check-label" for="q3c">Ice/Ground</label></div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>4. What generation was Sandslash introduced in?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q4" value="a" id="q4a"><label class="form-check-label" for="q4a">Gen I</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q4" value="b" id="q4b"><label class="form-check-label" for="q4b">Gen II</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q4" value="c" id="q4c"><label class="form-check-label" for="q4c">Gen III</label></div>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>5. What is Sandslash’s base Speed stat (Kanto form)?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q5" value="a" id="q5a"><label class="form-check-label" for="q5a">65</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q5" value="b" id="q5b"><label class="form-check-label" for="q5b">110</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q5" value="c" id="q5c"><label class="form-check-label" for="q5c">75</label></div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>6. Which item is used to evolve Alolan Sandshrew into Alolan Sandslash?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q6" value="a" id="q6a"><label class="form-check-label" for="q6a">Moon Stone</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q6" value="b" id="q6b"><label class="form-check-label" for="q6b">Ice Stone</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q6" value="c" id="q6c"><label class="form-check-label" for="q6c">Thunder Stone</label></div>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>7. Sandslash is weak to which of the following types? (Kanto)</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q7" value="a" id="q7a"><label class="form-check-label" for="q7a">Electric</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q7" value="b" id="q7b"><label class="form-check-label" for="q7b">Water</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q7" value="c" id="q7c"><label class="form-check-label" for="q7c">Fire</label></div>
                    </div>
                </div>

                <!-- Question 8 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>8. What ability might a Kanto Sandslash have?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q8" value="a" id="q8a"><label class="form-check-label" for="q8a">Slush Rush</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q8" value="b" id="q8b"><label class="form-check-label" for="q8b">Sand Veil</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q8" value="c" id="q8c"><label class="form-check-label" for="q8c">Levitate</label></div>
                    </div>
                </div>

                <!-- Question 9 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>9. What color is shiny Sandslash?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q9" value="a" id="q9a"><label class="form-check-label" for="q9a">red and brown</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q9" value="b" id="q9b"><label class="form-check-label" for="q9b">yellow and brown</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q9" value="c" id="q9c"><label class="form-check-label" for="q9c">green and yellow</label></div>
                    </div>
                </div>

                <!-- Question 10 -->
                <div class="card question-card">
                    <div class="card-body">
                        <p><strong>10. how many clawn fingers does sandslash have?</strong></p>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q10" value="a" id="q10a"><label class="form-check-label" for="q10a">three</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q10" value="b" id="q10b"><label class="form-check-label" for="q10b">one</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="q10" value="c" id="q10c"><label class="form-check-label" for="q10c">two</label></div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mt-4 w-100" onclick="checkAnswers()">Finish Quiz</button>
            </form>
        </div>

        <script>
            const answers = {
                q1: "b",
                q2: "b",
                q3: "a",
                q4: "a",
                q5: "c",
                q6: "b",
                q7: "b",
                q8: "b",
                q9: "a",
                q10: "c"
            };

            function checkAnswers() {
                let correct = 0;
                for (const [key, value] of Object.entries(answers)) {
                    const selected = document.querySelector(`input[name="${key}"]:checked`);
                    if (selected && selected.value === value) {
                        correct++;
                    }
                }

                document.getElementById("correctCount").textContent = correct;
                document.getElementById("resultBox").style.display = "block";
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        </script>





    </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>
