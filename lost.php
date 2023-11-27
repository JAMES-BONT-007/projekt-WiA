<?php
                    $conn = new mysqli("127.0.0.1", "root", "", "tictactoedb");
                    $q = "UPDATE uzytkownicy SET ranking=ranking-20 WHERE nazwa='".$_COOKIE['konto']."';";
                    $wynik = $conn->query($q);
                    ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylegif.css">
    <link rel="icon" type="image/x-icon" href="ave.ico">
    <title>kolko</title>
    <body>
        <div id="lewy">
            <p>Autoreklama</p>
            <img id="albion" src="reklama5.png"/>
            <p>Oto pan Dariusz.<br>Pan Dariusz ma zepsutą kamerkę bo nie posiada kamery od firmy Tutel Maciek.<br>Nie bądź jak pan Dariusz.<br><b>Bonusowy kod "Tutel" na -35% na pierwsze zakupy.</b></p>
        </div>
        <div id="srodek">
        <h1>PRZEGRAŁEŚ 😥</h1>

        <img id="lost" src="lost.gif"  alt="tie"/>
        <br>
        <button id ="login" onclick="window.location.href='menu.php'">POWRÓT</button>
        </div>
        <div id="prawy">
            <p>Ogłoszenie specjalne</p>
            <img id="albion" src="reklama6.png"/>
            <p>Bądź gotów na wezwanie do walki za swoją ojczyznę. <b>Chwała Rzeczypospolitej</b></p>
        </div>
      
</body>

</html>