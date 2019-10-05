<?php
ob_start();
include("config.php");
    if (isset($_POST['submit-book'])){
    	$emri = mysqli_real_escape_string($db, $_POST['emri']);
	$viti = mysqli_real_escape_string($db, $_POST['viti']);
	$linku = mysqli_real_escape_string($db, $_POST['linku']);
$target_dir = "books/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (empty($emri)){array_push($errors, "Ju lutem shenoni emrin"); }
	if (empty($linku)){array_push($errors, "Ju lutem shenoni linkun"); }
	if (($viti) == -1){array_push($errors, "Ju lutem zgjedhni vitin"); }
if (file_exists($target_file)) {
array_push($errors, "Ekziston nje foto tjeter me emer te njejte");

}
if ($_FILES["fileToUpload"]["size"] > 8000000) { //8MB
    array_push($errors, "Kjo foto eshte e madhe");
}



if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    array_push($errors, "Gabim. Vetem filet jpg, png dhe jpeg lejohen");
}

	
if (count($errors) == 0) {       
          

    compressImage1($_FILES['fileToUpload']['tmp_name'],$target_file,60);

$target_file1 = $_FILES["fileToUpload"]["name"];
$query = "INSERT INTO books (Name, photo, academicyear, link) VALUES('$emri', '$target_file1', '$viti', '$linku')";
			mysqli_query($db, $query);
			header("Location:books.php");


               

}

}
function compressImage1($source, $destination, $quality) {

  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);

  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

}

?>