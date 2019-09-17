<?php
ob_start();
include("config.php");
if (isset($_POST["upload-folder"])){
	$emri = mysqli_real_escape_string($db, $_POST['folder']);
	$username = $_SESSION['username'];
	if (empty($emri)){array_push($errors, "Ju lutem shenoni emrin"); }
	if (count($errors) == 0) {   
  $query = "INSERT INTO folders(Name,username) 
					  VALUES('$emri','$username')";
			mysqli_query($db, $query);
			header("Location:lessons.php");
  }
}

?>