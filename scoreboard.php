<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylmenu.css">
    <title></title>

    <style>
    body{
        color: white;
    }    
    </style>
</head>
<body>
    <div id="center">
    <h1>Oto ranking naszych graczy:</h1>
    
    <?php
        $licz = 1;
        $conn = new mysqli("127.0.0.1", "root", "", "tictactoedb");

        $q = "SELECT * FROM uzytkownicy ORDER BY ranking DESC";
        $wynik = $conn->query($q);
        
        if($wynik->num_rows > 0) {
            echo "<table><tr><td>Numer w rankingu</td><td> Nazwa użtkownika </td><td> Ranking</td></tr>";
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
</body>
</html>