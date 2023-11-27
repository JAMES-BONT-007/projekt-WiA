<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkownika</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="konto">
<?php
    $nazwa = $_POST["nazwa"];
    $haslo = sha1($_POST["haslo"]);

    $conn = new mysqli("127.0.0.1", "root", "", "tictactoeDB");

    if ($conn->connect_error) {
        echo "cos poszło nie tak ¯\_(ツ)_/¯";
    }


    $q1 = "SELECT * FROM uzytkownicy WHERE nazwa = '$nazwa'";

    $wyn = $conn->query($q1);

    if ($wyn->num_rows > 0) {
        echo "Konto o nazwie '$nazwa' już istnieje! Użyj innego loginu dla swojego konta.";
        header("refresh:3;url=rejestracja.html");
        $q3 = "INSERT INTO `log` (`opis operacji`) VALUES ('niepowodzenie sworzenia konta o nazwie $nazwa, KONTO JUŻ ISTNIEJE')";
        $conn->query($q3);



        
    } else {
        $q2 = "INSERT INTO uzytkownicy (nazwa, haslo, ranking) VALUES ('$nazwa', '$haslo', 410)";
        
        if ($conn->query($q2) === TRUE) {
            echo "Pomyślnie stworzono konto: " . $nazwa . "!!!";

            $q4 = "INSERT INTO `log` (`opis operacji`) VALUES ('stworzenia konta o nazwie $nazwa')";
            $conn->query($q4);


        } else {
            echo "Coś poszło nie tak przy tworzeniu konta: " . $conn->error;

            $q5 = "INSERT INTO `log` (`opis operacji`) VALUES ('sworzenia konta: $conn->error')";
            $conn->query($q5);
        }
    }

    $conn->close();

    header("refresh:4;url=login.html");
?>
</div>
</body>
</html>
