<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie użytkownika</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="konto">
<?php

    $nazwa = $_POST["nazwa"];
    $haslo = sha1($_POST["haslo"]);

    $conn = new mysqli("127.0.0.1", "root", "", "tictactoedb");

    if ($conn->connect_error) {
        echo "cos poszło nie tak ¯\_(ツ)_/¯";
    }

    $q = "SELECT * FROM uzytkownicy WHERE nazwa='$nazwa' AND haslo='$haslo'";
    $wynik = $conn->query($q);

    if ($wynik->num_rows > 0) {
        setcookie("konto", $nazwa, time()+3600);  
        echo "Siema ".$nazwa."!!";

        $q2 = "INSERT INTO `log` (`opis operacji`) VALUES ('zalogowanie do konta $nazwa')";
        $conn->query($q2);

    }else{
        echo "podany login lub hasło jest nieprawidłowe!";

        $q3 = "INSERT INTO `log` (`opis operacji`) VALUES ('niepowodzenie zalogowania do konta $nazwa')";
        $conn->query($q3);
    }

    $conn->close();

header("refresh:3;url=menu.php"); 
?>
</div>
</body>
</html>
