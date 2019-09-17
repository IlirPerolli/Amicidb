<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
$youtubeID = getYouTubeVideoId('https://youtu.be/Nz9mBTAGVis?t=131');
$thumbURL = 'https://img.youtube.com/vi/' . $youtubeID . '/hqdefault.jpg';
print_r($thumbURL);

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