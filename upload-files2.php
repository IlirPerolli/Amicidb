<?php
// lidhu me databaze
include("config.php");
ob_start();
	session_start();
ini_set('upload_max_filesize', '4M');
$file = $_FILES["file"];


// **************** Shiko nese nuk ka uploaduar dhe nese jo mos e rrit countin ne databaze ************************
if($_FILES['file']['size'] == 0) {
header("Location:index-download2.php");
die();
	}



$file_name = $_SESSION['emri']. " " . $_SESSION['mbiemri'];
move_uploaded_file($file["tmp_name"], "uploads2/{$file_name}". " ngarkoi - " .$file["name"]);


$vitiakademik = $_SESSION['vitiakademik'];
	$query= "UPDATE users SET notification_uploads = notification_uploads + 1 WHERE academicyear = '$vitiakademik'";
			mysqli_query($db, $query);
header("Location: index-download2.php");﻿
?>
