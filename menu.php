<html>

<head>
    <meta charset="UTF-8">
    <title>KS THE GAME</title>
    <link rel="stylesheet" href="stylmenu.css">
    <link rel="icon" type="image/x-icon" href="ikona.ico">


</head>

<body>

    <div id="naglowek1">
        <?php

        if (isset($_COOKIE["konto"])) {
            $zalogowano = True;
            $login = $_COOKIE["konto"];

            echo "<b>Zalogowano jako: " . $login."</b>";
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

        <?php 
            if($zalogowano){
                echo '<link rel="stylesheet" href="stylmenu1.css">';
                echo '<button id="login" onclick="location.href=\'gra_wybor.php\'">GRAJ </button> <br> <br>';
                echo '<button id="score" onclick="location.href=\'scoreboard.php\'">SCOREBOARD</button>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                // echo '<button id="guest" onclick="location.href=\'logout.php\'">wyloguj</button>';

            }else{
                echo '<button id="login" onclick="location.href=\'login.html\'">ZALOGUJ </button>';
                echo '<p>Nie masz konta?</p>';
                echo '<button id="guest" onclick="location.href=\'gra.html\'">GRAJ JAKO GOŚĆ</button>';
                
            }
        ?>


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