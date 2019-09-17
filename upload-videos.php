<?php 
ob_start();
include("config.php");
if (isset($_POST['upload-video'])){
    $emri = mysqli_real_escape_string($db, $_POST['emri']);
	$linku = mysqli_real_escape_string($db, $_POST['linku']);
    $username = $_SESSION['username'];
	$youtubeID = getYouTubeVideoId($linku);
$photo = 'https://img.youtube.com/vi/' . $youtubeID . '/hqdefault.jpg';
$number = $_GET['folder'];
  if (empty($linku)){array_push($errors, "Ju lutem shenoni linkun"); }
  

if (count($errors) == 0) {   
  $query = "INSERT INTO folder_uploads (username, Name, Link, photo, id_folder) 
					  VALUES('$username', '$emri', '$linku', '$photo', '$number' )";
			mysqli_query($db, $query);
			header("Location:lessons.php?folder=".$number);
  }

}


function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    //Kur ka sekonda
    $youtubeVideoID = explode("?t", $youtubeVideoID);
    $youtubeVideoID = $youtubeVideoID[0];
    //
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}
?>