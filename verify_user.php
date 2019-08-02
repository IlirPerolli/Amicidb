<?php
include("config.php");
// Shiko nese eshte i kyqur. Nese jo ridirekto ne login
    $username = $_SESSION['username'];
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: login.php");
        die();
    }

    $querycheck = "SELECT * FROM users WHERE username='$username'";
	$results = mysqli_query($db, $querycheck);
	$row = $results->fetch_assoc();	
	if ($row['verification'] != 1) {
	$_SESSION['loggedIn'] = false;
    $_SESSION['loading'] = false;
	header("Location: login.php");
	die();
	}

	else if ($_SESSION['password'] != $row['password']){
	$_SESSION['loggedIn'] = false;
    $_SESSION['loading'] = false;
	header("Location: login.php");
	die();
	}
	else if (mysqli_num_rows($results) == 0) {
	$_SESSION['loggedIn'] = false;
    $_SESSION['loading'] = false;
	header("Location: login.php");
	die();
	}
    

    
?>