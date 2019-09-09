<?php
ob_start();
    session_start();
    $errors = array();
include("config.php");
    if(isset($_POST["submit-photo"])) {
$target_dir = "user-photos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if (file_exists($target_file)) {
array_push($errors, "Ekziston nje foto tjeter me emer te njejte");

}
if ($_FILES["fileToUpload"]["size"] > 8000000) { //8MB
    array_push($errors, "Kjo foto eshte e madhe");
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    array_push($errors, "Gabim. Vetem filet jpg, png dhe jpeg lejohen");
}
if (strpos($target_file,'Snapchat') !== false) {

   $target_file = $target_dir .  "amici_".$_SESSION['username'] . "." . $imageFileType;

}
else if (strpos($target_file,'snapchat') !== false) {

   $target_file = $target_dir .  "amici_".$_SESSION['username'] . "." . $imageFileType;

}
if (count($errors) == 0) {
  $username = $_SESSION['username'];
 $query1 = "SELECT * FROM users WHERE username='$username'";

$results1 = mysqli_query($db, $query1);
          $row = $results1->fetch_assoc(); 
             if ($row['userphotos'] == "defaultfemale.png" || $row['userphotos'] == "defaultmale.png"){
           
          

    compressImage($_FILES['fileToUpload']['tmp_name'],$target_file,60);
$username = $_SESSION['username'];
$target_file1 = $_FILES["fileToUpload"]["name"];

if (strpos($target_file1,'Snapchat') !== false) {

   $target_file1 = "amici_".$_SESSION['username'] . "." . $imageFileType;

}
else if (strpos($target_file1,'snapchat') !== false) {

  $target_file1 = "amici_".$_SESSION['username'] . "." . $imageFileType;

}
                $sql = "UPDATE users SET userphotos='$target_file1' WHERE username='$username'";
                mysqli_query($db, $sql);
                $sql1 = "UPDATE userposts SET photo='$target_file1' WHERE username='$username'";
                mysqli_query($db, $sql1);
                header('Location: edit-photo.php');
}
else {
array_push($errors, "Duhet te fshini foton para se te nderroni");
}
}

}
//Fshij foton
if(isset($_POST["remove-photo"])) {
 $username = $_SESSION['username'];
 $query1 = "SELECT * FROM users WHERE username='$username'";

$results1 = mysqli_query($db, $query1);
          $row = $results1->fetch_assoc(); 
             if ($row['userphotos'] == "defaultfemale.png" || $row['userphotos'] == "defaultmale.png"){
            header("Location:edit-photo.php");
            die();
          }
          //Fshirja e fotos --------------
          $foto = $row['userphotos'];
          $myFile = "user-photos/$foto";
unlink($myFile) or die(Header("Location:edit-photo.php"));
//------------------------------------------------------
  
          if ($row['gender'] == 0){
 $sql = "UPDATE users SET userphotos='defaultfemale.png' WHERE username='$username'";
                mysqli_query($db, $sql);
                $sql1 = "UPDATE userposts SET photo='defaultfemale.png' WHERE username='$username'";
                mysqli_query($db, $sql1);
}

else if ($row['gender'] == 1){
 $sql = "UPDATE users SET userphotos='defaultmale.png' WHERE username='$username'";
                mysqli_query($db, $sql);
                $sql1 = "UPDATE userposts SET photo='defaultmale.png' WHERE username='$username'";
                mysqli_query($db, $sql1);
}

}

function compressImage($source, $destination, $quality) {

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