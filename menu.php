<html>
<head>
    <meta charset="UTF-8">
    <title>KS THE GAME</title>
    <link rel="stylesheet" href="stylmenu.css">
    <link rel="icon" type="image/x-icon" href="ave.ico">
    
    
</head>
<body>
    
    <div id="naglowek1">

        

    </div>
    <div id="naglowek2">

       <img id="logo" src="logo.png" alt="logo_gry"/>

    </div>
    <div id="naglowek3">

        <img src="mute-black.png" id="icon">

    </div>
    <div id="main">

        <button id="login" onclick="location.href='login.html'">ZALOGUJ </button>
        <p>Nie masz  konta?</p>
        <button id="guest" onclick="location.href='gra.html'">GRAJ JAKO GOŚĆ</button> 
        
    </div>

    
    <div id="stopka1">

        <h5>&copy; MASNY TUTEL, WSZELKIE PRAWA ZASTRZEŻONE</h5> 

    </div>
    <div id="stopka2">

        
        <img id="firma" src="tutelmaciek.png" alt="logo_studia"/>
    </div>
    <audio id="audio" loop>
        <source src="main.mp3" type="audio/mp3">
    </audio>
    <script>

        var audio = document.getElementById("audio");
        var icon = document.getElementById("icon");
        
        icon.onclick = function(){
            if(audio.paused){
                mysong.volume = 0.5;
                mysong.play();
                icon.src = "icon-black.png";
            }else{
                audio.pause();
                icon.src = "mute-black.png";
            }
        }

    </script>
</body>
</html>
