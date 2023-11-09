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
    $haslo = sha1($_POST["haslo"]); // Haszowanie hasła za pomocą SHA-1

    $conn = new mysqli("127.0.0.1", "root", "", "tictactoeDB");

    $q = "INSERT INTO users (nazwa, haslo) VALUES ('$nazwa', '$haslo')";

    if ($conn->query($q) === TRUE) {
    }

    $conn->close();

header("refresh:3;url=index.php"); // Przekierowanie do index.php po 3 sekundach
?>

</body>
</html>
