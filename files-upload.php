<?php 
include("config.php");
    $errors = array();
    ob_start();
if (isset($_POST['files'])){





ini_set('upload_max_filesize', '4M');
$username = $_SESSION['username'];
  $query1 = "SELECT * FROM users WHERE username='$username'";
    $results1 = mysqli_query($db, $query1);
          $row = $results1->fetch_assoc();
          date_default_timezone_set("Europe/Tirane");
    $date = date("d/m/Y");
    $time = date("H:i");
    
    $emri = $row['Name'];
    $mbiemri = $row['Surname'];
    $vitiakademik = $_SESSION['vitiakademik'];

$file = $_FILES["file"];
$filename = $file["name"];



// **************** Shiko nese nuk ka uploaduar dhe nese jo mos e rrit countin ne databaze ************************

if (file_exists("user-files/".$filename)) {
array_push($errors, "Ekziston nje dokument tjeter me emer te njejte");

}


if ($_FILES['file']['size'] > 8000000) { //8MB
   array_push($errors, "Dokumenti ka nje madhesi te madhe");
}

if (count($errors) == 0){
move_uploaded_file($file["tmp_name"], "user-files/".$file["name"]);


$query = "INSERT INTO userfiles (username, Name, Surname, file, academicyear, date, time) 
            VALUES('$username', '$emri','$mbiemri', '$filename', '$vitiakademik', '$date', '$time')";
      mysqli_query($db, $query);
$query1= "UPDATE users SET notification_uploads = notification_uploads + 1 WHERE academicyear = '$vitiakademik'";
      mysqli_query($db, $query1);

}}


?>