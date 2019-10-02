<?php
ob_start();
include("config.php");
if (isset($_POST["upload-folder"])){
	$emri = mysqli_real_escape_string($db, $_POST['folder']);
	$username = $_SESSION['username'];
	$query = "SELECT * from users WHERE username = '$username'";
	$results = mysqli_query($db,$query);
	$row = $results->fetch_assoc();
	$id_user = $row['id'];
	if (empty($emri)){array_push($errors, "Ju lutem shenoni emrin"); }
	date_default_timezone_set("Europe/Tirane");
		$date = date("d/m/Y");
		$time = date("H:i");
	if (count($errors) == 0) {   
  $query = "INSERT INTO folders(folder_name,date,time,id_user) 
					  VALUES('$emri','$date','$time','$id_user')";
			mysqli_query($db, $query);
			header("Location:lessons.php");
  }
}

?>