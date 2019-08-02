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
  .categories{
  width:90% !important;
  margin-left:0 !important;
  margin-right:0px !important;
}
.categories img{
  width:100% !important;
}
  .max-width{

margin-top: 40px !important;
 }

  }

.categories{
width:350px;
height:400px;
display:inline-block;
background:white;
margin-left:10px;
margin-right:10px;
margin-top:20px;
-webkit-box-shadow: 5px -5px 15px -7px #6A6A6A; 
box-shadow: 5px -5px 15px -7px #6A6A6A;
/*transition:transform.3s;*/
transition: all .2s ease-in-out; 
overflow: hidden;
}
.categories:hover{
  
  -webkit-box-shadow: 10px -10px 15px -7px #6A6A6A; 
box-shadow: 10px -10px 15px -7px #6A6A6A;
transform: scale(1.02);

}
.categories a{
  text-decoration:none;
  color:black;
}
.categories a:hover{
  text-decoration:underline;
}
.category-name{
  padding:20px;
}
.categories-photo{
  width:350px;
  height:320px;
}
  .max-width{
margin:auto;
text-align: center;
max-width: 1300px;
margin-top: 20px;
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
       <a class="nav-link active" href="admin.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Admin <span class="sr-only">(current)</span></a>
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


  <div class = "categories">
  <a href = "users.php"> <img src = "https://image.freepik.com/free-vector/people-avatars-community-group_24908-29265.jpg" class = "categories-photo"/></a>
  <div class = "category-name">
  <a href="users.php" > Perdoruesit </a>
  </div>
  </div>

  <div class = "categories">
   <a href = "suspended-users.php"><img src = "https://image.freepik.com/free-vector/hands-approving-denying_1133-104.jpg" class = "categories-photo"/></a>
  <div class = "category-name">
  <a href="suspended-users.php" > Suspendimet </a>
  </div>
  </div>
<!--https://image.freepik.com/free-vector/crossing-out-concept-flat-vector-illustration_1995-285.jpg-->
  <div class = "categories">
  <a href = "books.php"> <img src = "https://image.freepik.com/free-vector/books-stack-realistic_1284-4735.jpg" class = "categories-photo"/></a>
  <div class = "category-name">
  <a href="books.php" > Librat </a>
  </div>
  </div>





</div>
</div>

<br>

</body>
</html>
