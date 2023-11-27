<html>

<head>
    <meta charset="UTF-8">
    <title>KS THE GAME</title>
    <link rel="stylesheet" href="stylmenu.css">
    <link rel="icon" type="image/x-icon" href="ave.ico">

    <style> 
    h1{
        color: white;
    }

    table{
        margin-left: auto;
        margin-right: auto;
        width: 45%
    }

    table, tr, td{
        background-color: #33a6b8;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:not(:nth-child(1)) > td:nth-child(1){
        text-align: right;

    }

    tr:nth-child(even) > td{
        background-color: #0291a8;

    }

    tr:nth-child(odd) > td{
        background-color: #36e3ff;

    }

    tr > td:nth-child(1){
        width: 15%;
    }

    tr:nth-child(1) > td{
        background-color: #0045ad;

    }

    tr:nth-child(2) > td{
        background-color: #fcb434;

    }

    tr:nth-child(3) > td{
        background-color: silver;

    }

    tr:nth-child(4) > td{
        background-color: #a34b2a;

    }

    </style>



</head>

<body>

    <div id="naglowek1">
        <?php

        if (isset($_COOKIE["konto"])) {
            $zalogowano = True;
            $login = $_COOKIE["konto"];

            echo "Zalogowano jako " . $login;
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

        $q = "SELECT * FROM uzytkownicy ORDER BY ranking DESC";
        $wynik = $conn->query($q);
        
        if($wynik->num_rows > 0) {
            echo "<table><tr><td>Nr w rankingu</td><td> Nazwa użtkownika </td><td> Ranking</td></tr>";
            while($row= $wynik->fetch_array()){

                echo "<tr><td>". $licz ."</td><td>".$row[1]."</td><td>". $row[3]."</td></tr>";
                $licz++;
            }
            echo "</table>";
        }else{
            echo "<p>Nasza baza jeszcze nie ma żadnych JESZCZE użytkówników.</p>
            <p>Możesz być pierwszy!</p>";

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