<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylindex.css">
</head>
<body>

<?php

    if(isset($_COOKIE['konto'])) {
        $nazwa_uzytkownika = $_COOKIE['konto'];
        $zalogowany = true;
    } else {
        $zalogowany = false;
    }
?>
    <h1 id="tekst">Witaj na stronie TIC TAC TOE!</h1>

    <div>

        <?php

            if ($zalogowany) {
                echo '<p>Teraz Twoja historia gier jest zapisywana w naszej bazie danych!</p>';
                echo '<button id="gra" onclick="location.href=\'strona-gry.html\'">GRAJ</button>';
            } else {
                echo '<p>aby móc zobaczyć historię swoich meczów oraz wykonanych w danym meczu 
                historię ruchów musisz być zalogowany!</p>';  
                
                echo '<div id="login" onclick="location.href=\'login.html\'">';
                echo    'ZALOGUJ';
                echo '</div>';
                
                echo '<h2 id="wieksze">- LUB -</h2>';
        
                echo '<div id="playnow" onclick="location.href=\'gra-wybor.html\'">';
                echo '    GRAJ JAKO GOŚĆ';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>
