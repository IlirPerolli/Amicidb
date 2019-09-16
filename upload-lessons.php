<?php 
ob_start();
include("config.php");
if (isset($_POST['submit-lesson'])){
	$emri = mysqli_real_escape_string($db, $_POST['emri']);
	$linku = mysqli_real_escape_string($db, $_POST['linku']);
	$photo = mysqli_real_escape_string($db, $_POST['photo']);
	$course = mysqli_real_escape_string($db, $_POST['course']);
	$week = mysqli_real_escape_string($db, $_POST['week']);
if (empty($emri)){array_push($errors, "Ju lutem shenoni emrin"); }

  if (empty($linku)){array_push($errors, "Ju lutem shenoni linkun"); }
  if (empty($photo)){array_push($errors, "Ju lutem shenoni linkun e fotos"); }
  if (($course) == -1){array_push($errors, "Ju lutem zgjedhni kursin"); }
    if (($week) == -1){array_push($errors, "Ju lutem zgjedhni javen e kursit"); }
if (count($errors) == 0) {   
  $query = "INSERT INTO kursori (Name, link, photo, course, week) 
					  VALUES('$emri', '$linku', '$photo', '$course', '$week')";
			mysqli_query($db, $query);
			header("Location:kursori.php");
  }

}



?>