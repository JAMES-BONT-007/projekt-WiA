<html>

<head>
    <meta charset="UTF-8">
    <title>KS THE GAME</title>
    <link rel="stylesheet" href="stylranking.css">
    <link rel="icon" type="image/x-icon" href="ikona.ico">
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

        <h1>Oto ranking naszych graczy:</h1>

        <?php
        $licz = 1;
        $conn = new mysqli("127.0.0.1", "root", "", "tictactoedb");

        $q = "SELECT * FROM uzytkownicy ORDER BY ranking DESC LIMIT 15";
        $wynik = $conn->query($q);

        if ($wynik->num_rows > 0) {
            echo "<table><tr><td>Nr w rankingu</td><td> Nazwa użtkownika </td><td> ELO </td></tr>";
            while ($row = $wynik->fetch_array()) {

                echo "<tr><td>" . $licz . "</td><td>" . $row[1] . "</td><td>" . $row[3] . "</td></tr>";
                $licz++;
            }
            echo "</table>";
        } else {
            echo "<p>Nasza baza jeszcze nie ma żadnych JESZCZE użytkówników.</p>
            <p>Możesz być pierwszy!</p>";

        }

        ?>

        <button id="login" onclick="window.location.href='menu.php'">POWRÓT</button>
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

        icon.onclick = function () {
            if (audio.paused) {
                audio.volume = 0.5;
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