<?php
                    $conn = new mysqli("127.0.0.1", "root", "", "tictactoedb");
                    $q = "UPDATE uzytkownicy SET ranking=ranking+15 WHERE nazwa='".$_COOKIE['konto']."';";
                    $wynik = $conn->query($q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylegif.css">
    <link rel="icon" type="image/x-icon" href="ikona.ico">
    <title>kolko</title>
    <body>
        <div id="lewy">
            <p>Autoreklama</p>
            <img id="albion" src="reklama1.png"/>
            <p><b>Polecamy</b><br> ciepłe bułeczki i koks pierwsza klasa <br>
                tylko w sklepach <b>ABC</b></p>
        </div>
        <div id="srodek">
        <h1>GRATULACJE UŻYTKOWNIKU</h1>

        <img id="tie" src="win.gif"  alt="tie"/>
        <br>
        <button id ="login" onclick="window.location.href='menu.php'">POWRÓT</button>
        </div>
        <div id="prawy">
            
            <img id="albion" src="reklama4.jpg"/>
            <p><b>PRACOWNIK MIESIĄCA</b></p>
        </div>
       <script>

        


       </script>
</body>

</html>