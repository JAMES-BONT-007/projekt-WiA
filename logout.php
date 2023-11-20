<?php
    setcookie("konto", "", time()-1);
    header("refresh:0.5;url=menu.php");   
?>