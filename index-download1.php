<?php
    // Starto sesionin

    ob_start();
    session_start();
    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
	include("check-vitiakademik.php");
   include ("verify_user.php");
    if (!isset($_SESSION['vitiakademik']) || $_SESSION['vitiakademik'] == "1") {
        header("Location: index.php");
    }
	 else if (!isset($_SESSION['vitiakademik']) || $_SESSION['vitiakademik'] == "3") {
        header("Location: index.php");
    }
    // lidhu me databaze
include("config.php");
$username = $_SESSION['username'];
$query= "UPDATE users SET notification_uploads = '0' WHERE username = '$username'";
      mysqli_query($db, $query);

?>
<html>
<head>
  <title> Dokumentet - Viti 2 </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 <link rel="icon" type="image/png" href="people.png" />
  <meta name="theme-color" content="#2f476d">
  <meta http-equiv="Refresh" content="600">
  <meta name="msapplication-navbutton-color" content="#2f476d">
  <link rel = "stylesheet" type = "text/css" href = "nav-stili.css"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
  <link rel = "stylesheet" type = "text/css" href = "stili.css">
  <script src="navi.js"></script>
 <style>
  @font-face {
    font-family: 'SamsungSharpSans-Medium';
    src: url('fonti-medium/SamsungSharpSans-Medium.eot');
    src: url('fonti-medium/SamsungSharpSans-Medium.woff2') format('woff2'),
         url('fonti-medium/SamsungSharpSans-Medium.woff') format('woff'),
         url('fonti-medium/SamsungSharpSans-Medium.ttf') format('truetype'),
         url('fonti-medium/SamsungSharpSans-Medium.svg#SamsungSharpSans-Medium') format('svg'),
         url('fonti-medium/SamsungSharpSans-Medium.eot?#iefix') format('embedded-opentype');
    font-weight: normal;
    font-style: normal;
  }
  body,html{
    margin:0;
    padding: 0;
    font-family: 'SamsungSharpSans-Medium';
  }
.files{

  padding:15px;
  border-bottom: 1px solid #ECEFF3;
  
  
}
.files:hover{
  background: #ECEFF3;
}
.container input[type="submit"] {

    height: 80px;
    width:250px;
    font-size: 25px;
    color: #333333;
    display: block;
  font-family: 'SamsungSharpSans-Bold';
    font-weight: 100;
    cursor: pointer;
    border-radius: 5px;
    border:2px solid #333333;
    outline: none;
    background: rgb(243, 243, 243);
    display: inline-block;
    margin-left:10px;

   
}
.container input[type="submit"]:hover {
background: #e9e9e9;
}
.fajli{
  display: inline-block;
  background: rgb(243, 243, 243);
  font-size: 20px;
  padding:18px;
  border-radius: 5px;
  border:2px solid #333333;
   

float:left;
margin-left:180px;

}
.fajli:hover{
  opacity: 1;
}
.file-container{
    overflow: auto;

  margin-bottom: 10px;
  text-align: left;



}
input[type=file]{
width: 140px;
margin-right:10px;
   color:transparent;
   font-size: 20px;

}
.container{
  width:80%;
  margin:auto;
  border: 1px solid black;
  border-radius: 10px;
  background: white;
  margin-bottom: 30px;
  margin-top:-30px;
}


@media screen and (max-width:900px){
  .forma-default{
  display: block !important;
}
.forma-bootstrap{
  display: none !important;
}
.container{
border:none;
width:100%;
word-break: break-all;
height:auto;
background: rgb(243, 243, 243);
} .file-container{

height: auto !important;

  }

.container input[type=submit]{
  margin-top:20px !important;
  width:95% !important;
  background: white;
}
.fajli{
  width:95% !important;

    font-size: 15px !important;
    margin-left:10px !important;  
    background: white;


}

}

body {
  background: rgb(243, 243, 243);
}
a{
  color: black;
  text-decoration: none;
  font-size: 20px;
}
a:hover{
  color:black;}
  li{
    list-style-type: none;
  }
  .forma-default{
    display: none;
  }
  </style>
</head>
<body>
  <script type = "text/javascript">
  window.pressed = function(){
      var a = document.getElementById('aa');
      if(a.value == "")
      {
          fileLabel.innerHTML = "Choose file";
      }
      else
      {
          var theSplit = a.value.split('\\');
          fileLabel.innerHTML = theSplit[theSplit.length-1];
      }
  };
  </script>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici dosjet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id = "Kryefaqja">
        <a class="nav-link" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Kryefaqja </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">
         Librat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="librat-viti1.php" id ="librat-viti1" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Librat Viti I</a>
          <a class="dropdown-item" href="librat-viti2.php" id ="librat-viti2" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Librat Viti II</a>
          <!--<div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="librat-viti3.php" id ="librat-viti3" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Librat Viti III</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">
        Dosjet 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index-download.php" id="d-viti1" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Dosjet Viti I</a>
          <a class="dropdown-item" href="index-download1.php" id="d-viti2" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Dosjet Viti II</a>
          <a class="dropdown-item" href="index-download2.php" id="d-viti3" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Dosjet Viti III</a>
        </div>
      </li>
       <a class="nav-link" href="group.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Grupi <span id="notification-counter"> <?php echo $_SESSION['notification'] ?> </span> <span class="sr-only">(current)</span></a>
    </ul>

     <ul class="navbar-nav mx-3">
    <li class="nav-item dropdown">
      <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">
    <img src="person-1824144_960_720-e1494184045144.png" width="30" height="30" style = "margin-top:-5px;" class="d-inline-block align-top" alt="">
    <?php echo($_SESSION['emri']. " " . $_SESSION['mbiemri']);?>
  </a>  
     <div class = "shkyqja" style = "margin-right: 150px;">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="edit_profile.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Edito Profilin</a>  
          <div class="dropdown-divider"></div>   
       <form method="post" class = "dropdown-item my-2 p-0" style = "background: none" action="logout.php">
      <input type="submit" id = "shkyqja" value="Shkyqu">
       
  </form>
        </div></div>
      </li>
    </ul>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <br><br><br><br><br><br>
  <div style = "text-align:center">


<div class = "container">
<br>


<form method="POST" enctype="multipart/form-data" action="upload-files1.php" class = "forma-bootstrap">
<div class="input-group mb-3">

  <div class="custom-file">
    <input type="file" class="custom-file-input" value="Browse" name="file" id="inputGroupFile03">
    <label class="custom-file-label" for="inputGroupFile03">Zgjedh nje Dokument (Max: 8MB)</label>

  </div>
    <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="submit">Ngarko</button>
  </div>
</div>
</form>

<form method="POST" enctype="multipart/form-data" action="upload-files1.php" class = "forma-default">
  <div class = "file-container">
  <div class = "fajli"><input type='file' id="aa" value="Browse" name="file" onchange="pressed()"><label id="fileLabel">Zgjedh nje Dokument (Max: 8MB)</label></div>

<input type="submit" value="Ngarko">
</div>
</form>

<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>





<?php

ini_set('upload_max_filesize', '4M');
$dir = "uploads1/";
chdir($dir);
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files);
foreach($files as $filename)
{
?>
<div class= "files"> <a download="<?php echo $filename ?>" title = "Shkarko kete dokument" href="uploads1/<?php echo $filename ?>"><?php  echo "<li>".substr($filename, 0, -4)."</li>"; ?></a></div>

<?php


}?></body>
</html>
