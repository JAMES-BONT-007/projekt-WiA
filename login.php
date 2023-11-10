<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie użytkownika</title>
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

    $q = "SELECT * FROM users WHERE nazwa='$nazwa' AND haslo='$haslo'";
    $wynik = $conn->query($q);

    if ($wynik->num_rows > 0) {
        setcookie("konto", $nazwa, time()+3600);
    }

    $conn->close();

header("refresh:3;url=index.php"); 
?>

</body>
</html>
