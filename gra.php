<?php
if(isset($_POST["gra"])){

$bot = True;    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kolko</title>
    <script>
        var count = 0;
        var x = 0;
        var o = 0;
        const klikniete = []
        const plansza = [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]
        ]

        function klik(place) {
            count = count + 1;
            klikniete.push(place)
            console.log(klikniete)
            if (count <= 9) {
                if (count % 2 == 0) {

                    document.getElementById(place).src = "x_sign.png";
                    document.getElementById(place).className = "x_img";
                    document.getElementById("td_" + place).removeAttribute("onclick");
                    if (place < 4) {
                        plansza[0][place - 1] = 1;
                    } else if (place < 7) {
                        plansza[1][place - 4] = 1;
                    } else {
                        plansza[2][place - 7] = 1;
                    }
                    

                    <?php
                     if($bot){

                        echo 'let ruchok = false;
                        do {
                            ruchbot = Math.floor(Math.random() * 9) + 1;

                            if (!klikniete.includes(ruchbot)) {
                                klik(ruchbot)
                                ruchok = true;
                            }
                        } while (!ruchok);';
                    }
                    ?>


                }
                else {

                    document.getElementById(place).src = "o_sign.png";
                    document.getElementById(place).className = "o_img";
                    document.getElementById("td_" + place).removeAttribute("onclick");
                    if (place < 4) {
                        plansza[0][place - 1] = -1;
                    } else if (place < 7) {
                        plansza[1][place - 4] = -1;
                    } else {
                        plansza[2][place - 7] = -1;
                    }
                }
            }
            for (i = 0; i < 3; i++) {
                if (plansza[i][0] + plansza[i][1] + plansza[i][2] == 3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz x wygral";
                } else if (plansza[i][0] + plansza[i][1] + plansza[i][2] == -3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz o wygral";
                } else if (plansza[0][i] + plansza[1][i] + plansza[2][i] == 3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz x wygral";
                } else if (plansza[0][i] + plansza[1][i] + plansza[2][i] == -3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz o wygral";
                } else if (plansza[0][0] + plansza[1][1] + plansza[2][2] == 3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz x wygral";
                } else if (plansza[0][0] + plansza[1][1] + plansza[2][2] == -3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz o wygral";
                } else if (plansza[0][2] + plansza[1][1] + plansza[2][0] == 3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz x wygral";
                } else if (plansza[0][2] + plansza[1][1] + plansza[2][0] == -3) {
                    open_modal();
                    document.getElementById('won').innerHTML = "gracz o wygral";
                } else if (count == 9) {
                    open_modal();
                    document.getElementById('won').innerHTML = "remis";
                }
            }
        }



        function open_modal() {
            const dialog = document.querySelector("dialog");
            dialog.showModal();
        }

        function close_modal() {
            const dialog = document.querySelector("dialog");
            dialog.close();
            location.reload();
        }
    </script>
</head>

<body>
    <div class="center">
        <dialog>
            <p id="won"></p>
            <button onclick="close_modal()">zamknij</button>
        </dialog>

        <table>
            <tr id='tr1'></tr>
            <tr id='tr2'></tr>
            <tr id='tr3'></tr>
        </table>

        <script>
            var deb = 1;
            for (var i = 1; i <= 3; i++) {
                for (var j = 0; j < 3; j++) {
                    document.getElementById('tr' + i).innerHTML += "<td onclick='klik(" + deb + ")' id='td_" + deb + "'><img src='./blank.png' id='" + deb + "' draggable='false'></td>";
                    deb++;
                }
            }
            <?php
            if($bot){
                echo 'if(count == 0){
                    ruchbot = Math.floor(Math.random() * 9) + 1;
                    klik(ruchbot);
                }';
            }
            ?>

        </script>
    </div>
</body>

</html>