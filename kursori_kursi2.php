<?php
    // Starto Sesionin
    ob_start();
    session_start();
    include("check-vitiakademik.php");
    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
    include ("verify_user.php");


     if ((($_SESSION['username']) == "ilirperolli") || (($_SESSION['username']) == "arianitjaka") || (($_SESSION['username']) == "K") || (($_SESSION['username']) == "nitaqerkezi") || (($_SESSION['username']) == "Bujan")) {
        
    }
    else {
      header("Location: index.php");
      die();
    }
?>
<html>
<head>
  <title> Mesime </title>
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
  <link rel = "stylesheet" type = "text/css" href = "librat-stili.css">
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
  @media screen and (max-width: 400px){
    #javet{
  width: 99% !important;
  margin:auto !important;
}
.card{
  margin-left:0px !important; 
  margin-right:0px !important;
  }}
   body{
    margin: 0;
    padding: 0;

    background: rgb(243, 243, 243);
}

.card{
	display: inline-block;
	margin-left:5px;
  margin-right:5px;
	margin-bottom:5px;
	margin-top:5px;
  height: 450px;
overflow: auto;}
#javet{
  width: 520px;
  margin-bottom: 10px !important;
    white-space: pre-wrap; /* CSS3 */    
    white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
    white-space: -pre-wrap; /* Opera 4-6 */    
    white-space: -o-pre-wrap; /* Opera 7 */    
    word-wrap: break-word; /* Internet Explorer 5.5+ */
}

.course-title{
  font-size: 30px;
  font-family: SamsungSharpSans-Bold;
  word-break: break-word !important;
}
#card{
  height: 400px;
}
.card h5{
  height: 50px;
}
</style>
<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici mesimet</a>
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
     <a class="nav-link" href="files.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Dosjet  <span id = "notification-counter-uploads"> <?php echo $_SESSION['notification_uploads'] ?> </span> <span class="sr-only">(current)</span></a>
 <a class="nav-link" href="group.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Grupi <span id="notification-counter"> <?php echo $_SESSION['notification'] ?> </span> <span class="sr-only">(current)</span></a>

<a class="nav-link active" href="lessons.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Mesimet   <span class="sr-only">(current)</span></a>



    </ul>

     <ul class="navbar-nav mx-3">
    <li class="nav-item dropdown">
       <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">
         <?php
          $username =$_SESSION['username'];
          $querycheck1 = "SELECT * FROM users WHERE username='$username'";
      $results1 = mysqli_query($db, $querycheck1);
        if (mysqli_num_rows($results1) == 1) {
          $row = $results1->fetch_assoc();
        echo '<img src="user-photos/'.$row['userphotos'].'" width="30" height="30" style = "margin-top:-3px; border-radius:50%" class="d-inline-block align-top" alt="">';
    }

          ?> 
    <?php echo($_SESSION['emri']. " " . $_SESSION['mbiemri']);?>
  </a>
     <div class = "shkyqja" style = "margin-right: 150px;">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="edit_profile.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Edito Profilin</a>  
          <div class="dropdown-divider"></div>   
        <a class="dropdown-item" href="logout.php" id = "logout" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Shkyqu</a>
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

  <br><br><br>
   <br><br><br>
   <div style = "text-align:center; margin:auto;">
  <div class = "max-width">

  <?php 
  $number = 0;
    echo '<div class = "course-title"> Dizajnimi, Analizimi dhe Integrimi i bazës së të dhënave në web</div>';
  echo "<br> <br>";
for ($j = 1; $j <= 7; $j++) {
    $number +=1;
    $mesimet = array("Hyrje në baza të të dhënave","Dizajnimi i bazës së të dhënave","Zhvillimi i bazës së të dhënave","Hyrje në SQL","Funksionet në SQL","Hyrje në Python","Integrimi i bazës së të dhënave në web me Python");

  echo '<a class="btn btn-secondary" id="javet" data-toggle="collapse" href="#collapseExample'.$number.'" style ="margin-left:5px" role="button" aria-expanded="false" aria-controls="collapseExample"> Java '.$j.": ".$mesimet[$number-1].' </a>';
echo '<div class="collapse" id="collapseExample'.$number.'">';
  echo '<div class="card card-body">';
  $querycheck = "SELECT * FROM kursori where course = 2 and week = $j order by id asc";
      $results = mysqli_query($db, $querycheck);
      while(($row = $results->fetch_assoc()) !== null){ 
echo'<div class="card" id="card"  style="width: 18rem;">';
  echo '<a href = "'.$row['link'].'" target="_blank"> <img src = "'.$row['photo'] .'" class="card-img-top" alt="..."></a>';
  echo '<div class="card-body">';
     echo '<a href = "'.$row['link'].'" target="_blank"><h5 class="card-title" style = "text-align:left; text-decoration:none; color:black">'.$row['Name'].'</h5> </a>';
  echo '<br>';
   echo '<a href = "'.$row['link'].'" class="btn btn-primary" target="_blank">Shiko Videon </a>';
  
 echo '</div>';
echo '</div>';
 }
  echo '</div>';
echo '</div>';
echo '<br>';
}

      ?>
  </div>
</div>
  <br><br><br>
<p>


</body>
</html>
