<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sandslash Catch Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #121212;
            font-family: sans-serif;
            overflow: hidden;
        }

        #backButton {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 350px;
            height: 50px;
            font-size: 40px;
            z-index: 1000;
            background-color: darkgreen;
            color: white;
        }

        #gameArea {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-image: url('img/Overgrown_Forest_Rescue_Team_DX.webp');
            background-size: cover;
            background-position: center;
        }

        #scoreboard {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255,255,255,0.85);
            padding: 10px 15px;
            border-radius: 10px;
            font-size: 18px;
            z-index: 1000;
        }

        #sandslash {
            position: absolute;
            bottom: 20px;
            left: 50%;
            width: 200px;
            transition: left 0.1s linear;
        }

        .falling {
            position: absolute;
            top: -50px;
            width: 100px;
            animation: fall linear;
        }

        @keyframes fall {
            0% { top: -50px; }
            100% { top: 100%; }
        }
    </style>
</head>
<body>


<a href="index.php" class="btn btn-info" id="backButton">← Back to Home</a>


<div id="gameArea">
    <div id="scoreboard">
        Score: <span id="score">0</span> |
        Missed: <span id="missed">0</span>
    </div>
    <img id="sandslash" src="https://img.pokemondb.net/sprites/home/normal/sandslash.png" alt="Sandslash">
</div>
<script>
    const gameArea = document.getElementById("gameArea");
    const sandslash = document.getElementById("sandslash");
    const scoreDisplay = document.getElementById("score");
    const missedDisplay = document.getElementById("missed");

    let score = 0;
    let missed = 0;
    let spawnInterval = 1500; // initial spawn speed
    let spawnIntervalId;
    let gameRunning = true;

    let sandslashX = (gameArea.offsetWidth - sandslash.offsetWidth) / 2;
    sandslash.style.left = sandslashX + "px";

    const keys = { left: false, right: false };
    const moveSpeed = 10;

    function moveSandslash() {
        const gameWidth = gameArea.offsetWidth;
        const sandslashWidth = sandslash.offsetWidth;

        if (keys.left) {
            sandslashX -= moveSpeed;
        }
        if (keys.right) {
            sandslashX += moveSpeed;
        }

        sandslashX = Math.max(0, Math.min(gameWidth - sandslashWidth, sandslashX));
        sandslash.style.left = sandslashX + "px";
    }

    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") keys.left = true;
        if (e.key === "ArrowRight") keys.right = true;
    });

    document.addEventListener("keyup", (e) => {
        if (e.key === "ArrowLeft") keys.left = false;
        if (e.key === "ArrowRight") keys.right = false;
    });

    setInterval(moveSandslash, 16); // ~60fps

    function spawnFallingItem() {
        if (!gameRunning) return;

        const item = document.createElement("img");
        item.src = "img/RazzBerry-GO.webp";
        item.className = "falling";
        item.style.animationDuration = "3s";

        const gameWidth = gameArea.offsetWidth;
        const itemWidth = 40;

        // spawn within central 40% area
        const spawnStart = gameWidth * 0.3;
        const spawnEnd = gameWidth * 0.7 - itemWidth;
        item.style.left = Math.random() * (spawnEnd - spawnStart) + spawnStart + "px";

        gameArea.appendChild(item);

        const interval = setInterval(() => {
            const itemRect = item.getBoundingClientRect();
            const sandslashRect = sandslash.getBoundingClientRect();
            const gameAreaRect = gameArea.getBoundingClientRect();

            const isTouching = (
                itemRect.bottom >= sandslashRect.top &&
                itemRect.top <= sandslashRect.bottom &&
                itemRect.left < sandslashRect.right &&
                itemRect.right > sandslashRect.left
            );

            if (isTouching) {
                score++;
                scoreDisplay.textContent = score;
                item.remove();
                clearInterval(interval);
                increaseDifficulty(); // spawn faster
                return;
            }

            if (itemRect.bottom >= gameAreaRect.bottom) {
                missed++;
                missedDisplay.textContent = missed;
                item.remove();
                clearInterval(interval);

                if (missed >= 10) {
                    endGame();
                }
            }
        }, 20);
    }

    function increaseDifficulty() {
        spawnInterval = Math.max(300, spawnInterval - 30); // never faster than 300ms
        clearInterval(spawnIntervalId);
        spawnIntervalId = setInterval(spawnFallingItem, spawnInterval);
    }

    function endGame() {
        gameRunning = false;
        clearInterval(spawnIntervalId);
        alert("Game Over! Final Score: " + score);

            window.location.href = "index.php"; // redirect to home


    }

    // Start the spawn loop
    spawnIntervalId = setInterval(spawnFallingItem, spawnInterval);
</script>


</body>
</html>
