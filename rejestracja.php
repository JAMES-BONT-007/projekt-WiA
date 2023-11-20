<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkownika</title>
    <link rel="stylesheet" href="">
</head>
<body>

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
    } else {
        $q2 = "INSERT INTO uzytkownicy (nazwa, haslo) VALUES ('$nazwa', '$haslo')";
        
        if ($conn->query($q2) === TRUE) {
            echo "Pomyślnie stworzono konto: " . $nazwa . "!!!";
        } else {
            echo "Coś poszło nie tak przy tworzeniu konta: " . $conn->error;
        }
    }

    $conn->close();

    header("refresh:4;url=login.html");
?>

</body>
</html>
