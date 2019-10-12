<?php
    // Starto sesionin
    ob_start();
  
       include("server.php");

    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
  include("check-vitiakademik.php");
   include ("verify_user.php");
   // if (($_SESSION['username']) != "ilirperolli") {
     //   header("Location: index.php");
    //}
    if ((($_SESSION['username']) == "ilirperolli") || (($_SESSION['username']) == "arianitjaka") || (($_SESSION['username']) == "K") ) {
        
    }
    else {
      header("Location: index.php");
      die();
    }
    
?>
<?php
   // lidhu me databaze
include("config.php");  
include("upload-lessons.php");
?>
<?php
if(isset($_GET['remove'])){
$number = $_GET['remove'];

$sql = "DELETE from kursori where id = '$number'";
mysqli_query($db, $sql);
header("Location: kursori.php");
}

?>

<html>
<head>
  <title> amici admin </title>
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

body {
  background: rgb(243, 243, 243);
}

  @media screen and (max-width:640px){
.avatar{
  width: 250px !important;
}
  }

  @media screen and (max-width:400px){
.avatar{
  width: 100% !important;
}
    #javet{
  width: 99% !important;
  margin:auto !important;
}
.card{
  margin-left:0px !important; 
  margin-right:0px !important;
  }
  }
  @media screen and (max-width:500px){

  .max-width{

margin-top: 40px !important;
 }
  .contact-form{
 width:95% !important;

 }


  }

  .max-width{
margin:auto;
text-align: center;
max-width: 1300px;

 }
 .contact-form
 {
     margin:auto;
     width: 400px;
     height:auto;
     padding: 20px 40px;
     box-sizing: border-box;
     background: white;
     -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 8px 25px 10px rgba(0,0,0,0.25);
     box-shadow: 0px 10px 13px -7px #000000, 0px 8px 25px 10px rgba(0,0,0,0.25);
     border-radius: 20px;
     margin-top:50px;

 }
.contact-form h2 {
    margin: 0;
    padding: 0 0 20px;
    color: black;
    font-family: 'SamsungSharpSans-Bold';
      font-weight: 200;
      font-size: 35px;
      margin:0;
    text-align: center;
    text-transform: uppercase;
    margin-top: 10px;

}
.contact-form p
{
    margin: 0;
    padding: 0;
    font-family: 'SamsungSharpSans-Bold';
      font-weight: 200;
      color: white;
      font-size: 23px;
      margin:0;
    color: black;
    text-align: left;
}
.avatar{
  width:250px;
 /* height:250px;*/
  border-radius: 50%;
display: block;
margin: 0 auto;
}
.contact-form input
{
    width: 100%;
    margin-bottom: 20px;

}
.contact-form input[type="text"]
{
    border: 1px solid grey;
    padding-left: 8px; 
    padding-right: 8px;
    background-color: #ffffff !important;
    outline: none;
    height: 48px;
    color: #454545;
    font-size: 17px;
    border-radius: 4px;
    border: 1px solid #EBEBEB;
     font-family: 'SamsungSharpSans-Bold';

}
.contact-form input[type="text"]:focus{
   border: 1px solid rgb(0, 132, 137);
}

.contact-form input[type="submit"] {
    height: 50px;
    font-size: 25px;
    color: #333333;
    display: block;
  font-family: 'SamsungSharpSans-Bold';
    font-weight: 100;
    cursor: pointer;
    border-radius: 5px;
    border:2px solid #333333;
    outline: none;
    background: white;
    margin-top: 7%;
}
.contact-form input[type="submit"]:hover {
background: #e9e9e9;
}
.error p {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
  font-size: 13px;
  margin-top: 5px;
}

 select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background: white;
background: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0Ljk1IDEwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9LmNscy0ye2ZpbGw6IzQ0NDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmFycm93czwvdGl0bGU+PHJlY3QgY2xhc3M9ImNscy0xIiB3aWR0aD0iNC45NSIgaGVpZ2h0PSIxMCIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIxLjQxIDQuNjcgMi40OCAzLjE4IDMuNTQgNC42NyAxLjQxIDQuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTIiIHBvaW50cz0iMy41NCA1LjMzIDIuNDggNi44MiAxLjQxIDUuMzMgMy41NCA1LjMzIi8+PC9zdmc+) no-repeat 95% 50%;
  -moz-appearance: none; 
  -webkit-appearance: none; 
  appearance: none;

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

.card h5{
  height: 50px;
}
 </style>

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici admin</a>
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
       <a class="nav-link" href="group.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Grupi <span id = "notification-counter"> <?php echo $_SESSION['notification'] ?> </span> <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="lessons.php" style = "font-family: SamsungSharpSans-Bold; font-size:20px;">Mesimet   <span class="sr-only">(current)</span></a>
       <a class="nav-link" href="admin.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Admin</a>
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
  <script type="text/javascript">
function searchfunction(){
var i=document.getElementById("search");
if(i.value=="")
    {
    document.getElementById("search-submit").disabled=true;
    }
else
    document.getElementById("search-submit").disabled=false;}




</script>
  <div style = "text-align:center">
    <div class = "max-width">

<div class = "contact-form">
    <form action="#" method="post" enctype="multipart/form-data">
   
     <?php
                        echo '<img src = "user-photos/'. $row['userphotos'] . '" class = "avatar"/>';
                         ?>
<script type="text/javascript">
  var cw = $('.avatar').width();
$('.avatar').css({
    'height': cw + 'px'
});
</script>

    <h2>Shto Mesim</h2>
    <p>Emri i Mesimit</p>
 <input name="emri" autofocus value ="<?php if(isset($_POST['emri'])){echo $_POST['emri'];}?>" type="text" placeholder = "Shkruani Emrin e Mesimit " />
     <p>Linku i Mesimit</p>
 <input name="linku" value ="<?php if(isset($_POST['linku'])){echo $_POST['linku'];}?>" type="text" placeholder = "Shkruani Linkun e Mesimit" />
  <p>Kursi</p>
    <select name="course">
    <option value="-1">Zgjedh</option>
    <option value="1" <?php if (isset($_POST['course']) AND $_POST['course'] == '1') {
    echo ' selected="selected"';
  } ?>>Kursi 1</option>
  <option value="2" <?php if (isset($_POST['course']) AND $_POST['course'] == '2') {
    echo ' selected="selected"';
  } ?>>Kursi 2</option>
  <option value="3" <?php if (isset($_POST['course']) AND $_POST['course'] == '3') {
    echo ' selected="selected"';
  } ?>>Kursi 3</option>
  </select>
  <p>Java</p>
    <select name="week">
    <option value="-1">Zgjedh</option>
    <option value="1" <?php if (isset($_POST['week']) AND $_POST['week'] == '1') {
    echo ' selected="selected"';
  } ?>>Java 1</option>
    <option value="2" <?php if (isset($_POST['week']) AND $_POST['week'] == '2') {
    echo ' selected="selected"';
  } ?>>Java 2</option>
  <option value="3" <?php if (isset($_POST['week']) AND $_POST['week'] == '3') {
    echo ' selected="selected"';
  } ?>>Java 3</option>
  <option value="4" <?php if (isset($_POST['week']) AND $_POST['week'] == '4') {
    echo ' selected="selected"';
  } ?>>Java 4</option>
  <option value="5" <?php if (isset($_POST['week']) AND $_POST['week'] == '5') {
    echo ' selected="selected"';
  } ?>>Java 5</option>
  <option value="6" <?php if (isset($_POST['week']) AND $_POST['week'] == '6') {
    echo ' selected="selected"';
  } ?>>Java 6</option>
  <option value="7" <?php if (isset($_POST['week']) AND $_POST['week'] == '7') {
    echo ' selected="selected"';
  } ?>>Java 7</option>
  <option value="8" <?php if (isset($_POST['week']) AND $_POST['week'] == '8') {
    echo ' selected="selected"';
  } ?>>Java 8</option>


  </select>

 <input type="submit" name="submit-lesson" value="Shto">
  <?php include('errors.php'); ?>
     </form>

</div>
<br><br>
  <?php 
  $number = 0;
for ($i = 1; $i <= 3; $i++) {
   $titujt = array("Zhvillimi Praktik i Aplikacioneve të Bazuara në Web","Dizajnimi, Analizimi dhe Integrimi i bazës së të dhënave në web","Integrimi i produkteve softwerike të përshkallëzuara");
    echo '<div class = "course-title"> '.$titujt[$i-1].' </div>';
  echo "<br> <br>";
for ($j = 1; $j <= 7; $j++) {
    $number +=1;
    $mesimet = array("HTML", "CSS", "JavaScript dhe jQuery", "Bootstrap", "Terminali","Github", "Hostimi i Web Aplikacioneve","Hyrje në baza të të dhënave","Dizajnimi i bazës së të dhënave","Zhvillimi i bazës së të dhënave","Hyrje në SQL","Funksionet në SQL","Hyrje në Python","Integrimi i bazës së të dhënave në web me Python", "Hyrje në rrjeta kompjuterike", "Hyrje në arkitekturën e aplikacioneve", "Balancimi i ngarkesës", "Caching", "CDN", "Procesimi offline", "Nivelet e platformës");

  echo '<a class="btn btn-secondary" id="javet" data-toggle="collapse" href="#collapseExample'.$number.'" style ="margin-left:5px" role="button" aria-expanded="false" aria-controls="collapseExample"> Java '.$j.": ".$mesimet[$number-1].' </a>';
echo '<div class="collapse" id="collapseExample'.$number.'">';
  echo '<div class="card card-body">';
  $querycheck = "SELECT * FROM kursori where course = $i and week = $j order by id asc";
      $results = mysqli_query($db, $querycheck);
      while(($row = $results->fetch_assoc()) !== null){ 
echo'<div class="card" id="card"  style="width: 18rem;">';
  echo '<a href = "'.$row['link'].'" target="_blank"> <img src = "'.$row['photo'] .'" class="card-img-top" alt="..."></a>';
  echo '<div class="card-body">';
 
     echo '<a href = "'.$row['link'].'" target="_blank"><h5 class="card-title" style = "text-align:left; text-decoration:none; color:black">'.$row['Name'].'</h5> </a>';
  echo '<br>';
   echo '<a href = "'.$row['link'].'" class="btn btn-primary" target="_blank">Shiko  </a>';
  echo "<br><br>";
      echo '<a href = "?remove='.$row['id'].'"> (Fshij Kete Mesim)  </a>';
 echo '</div>';
echo '</div>';
 }
  echo '</div>';
echo '</div>';
echo '<br>';

}
//Shfaqja e mesimeve te kursit te 3 java 8
if ($i == 3){
    $number1 = 30;
  echo '<a class="btn btn-secondary" id="javet" data-toggle="collapse" href="#collapseExample'.$number1.'" style ="margin-left:5px" role="button" aria-expanded="false" aria-controls="collapseExample"> Java 8: Siguria në arkitekturat e aplikacioneve softuerike </a>';
echo '<div class="collapse" id="collapseExample'.$number1.'">';
  echo '<div class="card card-body">';
  $querycheck = "SELECT * FROM kursori where course = $i and week = 8 order by id asc";
      $results = mysqli_query($db, $querycheck);
      while(($row = $results->fetch_assoc()) !== null){ 
echo'<div class="card" id="card"  style="width: 18rem;">';
  echo '<a href = "'.$row['link'].'" target="_blank"> <img src = "'.$row['photo'] .'" class="card-img-top" alt="..."></a>';
  echo '<div class="card-body">';
 
     echo '<a href = "'.$row['link'].'" target="_blank"><h5 class="card-title" style = "text-align:left; text-decoration:none; color:black">'.$row['Name'].'</h5> </a>';
  echo '<br>';
   echo '<a href = "'.$row['link'].'" class="btn btn-primary" target="_blank">Shiko  </a>';
  echo "<br><br>";
      echo '<a href = "?remove='.$row['id'].'"> (Fshij Kete Mesim)  </a>';
 echo '</div>';
echo '</div>';
 }
  echo '</div>';
echo '</div>';
}
//Perfundimi i javes 8 per kursin e 3te//

echo '<br><br>';
}


      ?>



</div>
</div>


<br>
  <div class = "max-width">

  </div>
</body>
</html>
