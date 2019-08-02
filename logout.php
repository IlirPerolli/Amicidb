<?php
    session_start();
    $_SESSION['loggedIn'] = false;
    $_SESSION['loading'] = false;
    header("Location: main.php");
?>
