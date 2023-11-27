<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylegra.css">
    <link rel="icon" type="image/x-icon" href="ikona.ico">
    <title>tic tac toe</title>

</head>

<body>

    <div id="naglowek1">
        <?php

        if (isset($_COOKIE["konto"])) {
            $zalogowano = True;
            $login = $_COOKIE["konto"];

            echo "Zalogowano jako: " . $login;
            echo '<br>';
            echo '<br>';
            echo '<button id="guest" onclick="location.href=\'logout.php\'">wyloguj</button>';
        }

        ?>


    </div>
    <div id="naglowek2">

        <img id="logo" src="logo.png" alt="logo_gry" />

    </div>
    <div id="naglowek3">

        <img src="mute-black.png" id="icon">

    </div>
    <div id="main">

    <form action="gra.php" method="POST" id="playForm">
        <p  for="playOption">WYBIERZ TRYB GRY:</p>
        
        <select name="gra" id="gra" onchange="zmiengraj()">
            <option id="option" value="none" disabled hidden>TRYBY GRY</option>
            <option id="option" value="solo">GRA Z GRACZEM OFFLINE</option>
            <option id="option" value="Bot" selected>GRA Z BOTEM</option>
            
        </select>
        <br>
        <input id="login" type="submit" value="GRAJ" id="graj">
    </form>

    <script>
        function zmiengraj() {
            var playOption = document.getElementById("gra").value;
            var graj = document.getElementById("graj");
            

            

            
            

                graj.disabled = playOption === "";

            
            
        }
    </script>


    </div>


    <div id="stopka1">

        <h5>&copy; MASNY TUTEL, WSZELKIE PRAWA ZASTRZEŻONE</h5>

    </div>
    <div id="stopka2">


        <img id="firma" src="tutelmaciek.png" alt="logo_studia" />
    </div>
    <audio id="audio" loop>
        <source src="main.mp3" type="audio/mp3">
    </audio>
    <script>
        var audio = document.getElementById("audio");
        var icon = document.getElementById("icon");

        icon.onclick = function() {
            if (audio.paused) {
                audio.volume = 0.3;
                audio.play();
                icon.src = "icon-black.png";
            } else {
                audio.pause();
                icon.src = "mute-black.png";
            }
        }
    </script>
</body>

</html>