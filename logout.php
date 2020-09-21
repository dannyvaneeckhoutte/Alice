<?php
    session_start();
    $_SESSION['sessie_gebr_id'] = "";
    $_SESSION['sessie_gebruiker'] = "";
    $_SESSION['sessie_wachtwoord'] = "";
    if(empty($_SESSION['sessie_gebr_id'])) header("location: login.php");
    ?>