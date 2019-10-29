<?php
    // Starto sesionin
    ob_start();
  
       include("server.php");
    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
  include("check-vitiakademik.php");
 include ("verify_user.php");
      if ((($_SESSION['username']) == "ilirperolli") || (($_SESSION['username']) == "arianitjaka") || (($_SESSION['username']) == "K") ) {
        
    }
    else {
      header("Location: index.php");
      die();
    }
?>
<?php 
 if (isset($_GET['fileerror'])){
   array_push($errors, "Foto ka nje madhesi te madhe");

 }
?>
<?php
// lidhu me databaze
include("config.php");
 //fshij komentin
$username = $_SESSION['username'];
$query1= "UPDATE users SET notification = '0' WHERE username = '$username'";
      mysqli_query($db, $query1);
      


   if (isset($_GET['remove-comment'])){
$number=$_GET['remove-comment'];
 $query100 = "SELECT * FROM userposts WHERE id='$number'";
                                    $results100 = mysqli_query($db, $query100);
                                    $row100 = $results100->fetch_assoc();
if ($_SESSION['username'] == "ilirperolli"){
    $file = $row100['uploadedphoto'];
          $myFile = "userpostsUploads/$file";
unlink($myFile); 
  $sql = "DELETE from userposts where id='$number'";
    
      mysqli_query($db, $sql);
      $sql1 = "DELETE from userposts where replyingto='$number'";
      mysqli_query($db, $sql1);
      //proveeeee
      //$vitiakademik = $_SESSION['vitiakademik'];
      //$query1= "UPDATE users SET notification = notification - 1 WHERE academicyear = '$vitiakademik'";
      //mysqli_query($db, $query1);
      //endprove
            header("Location:posts_controller.php");
  }
else{
   header("Location:posts_controller.php");
}
          

   }






            $query3 = "SELECT * FROM userposts WHERE (academicyear='1' or academicyear='2' or academicyear='3') AND replyingto is null ORDER BY id DESC";
            $results3 = mysqli_query($db, $query3);

             if (mysqli_num_rows($results3) == 0) {
                 echo '<style>#postimet { display:block!important;}</style>';

             }
          
          
           
?>

<html>
<head>
  <?php 
  if (isset($_GET['keyword'])){
echo "<title>".$_GET['keyword']. " - Kerkimi ne amici". " </title>";
  }
  else {
    echo "<title>amici grupi</title>";
  }

  ?>
   <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} //Mos u submit nese bohet refresh faqja
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 <link rel="icon" type="image/png" href="people.png" />
  <meta name="theme-color" content="#2f476d">
  <meta http-equiv="Refresh" content="600">
  <meta name="msapplication-navbutton-color" content="#2f476d">
  <link rel = "stylesheet" type = "text/css" href = "nav-stili.css"/>
  <link rel = "stylesheet" type = "text/css" href = "group-stili.css"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
  <link rel = "stylesheet" type = "text/css" href = "stili.css">
  <script src="navi.js"></script>
  <style>

 
.posts-controller{
padding:20px;
position: fixed;
width: 100%;
background: #E5E4E4;
opacity: 0.8;
z-index: 999;
}
 @media screen and (max-width: 640px){

      #password_control{
        width: 95% !important;
        padding-left: 5px;
        padding-right: 5px;
        margin-top: 60px !important;
      }
      #submit{
        width: 90% !important;
        
        text-align: center !important;
        margin: auto !important;
      }
    }
    #password_control{
      width: 500px;
      margin:auto;
      margin-top: 100px;
      background: white;
      opacity: 1;
      padding: 20px;
      border-radius: 10px;
       font-family:SamsungSharpSans-Bold;
    }
    #submit {
      width: 300px;
      margin:auto;
      text-align: center;
      margin-top: 20px;
    }
</style>


</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<!-- Skripta per popup -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici grupi</a>
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
       <a class="nav-link" href="group.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Grupi</a>
        <a class="nav-link" href="lessons.php" style = "font-family: SamsungSharpSans-Bold; font-size:20px;">Mesimet   <span class="sr-only">(current)</span></a>
         <a class="nav-link active" href="admin.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Admin <span class="sr-only">(current)</span></a>
    </ul>
  <form class="form-inline my-2 my-lg-0" method="get" action="#">
    <input type = "text" class="form-control mr-sm-2" placeholder="Kerko Mesazhe" aria-label="Search" id = "search" name="keyword" autocomplete="off" onkeyup="searchfunction()"/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search-submit" disabled>Kerko</button>
    </form>
     <ul class="navbar-nav mx-3" id="prova">
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

  
  <div style = "text-align:center; margin-top: 78px;">

   
 
    <div class = "posts-controller"> Kontrollimi i Postimeve </div>
    <br>
<?php if (($_SESSION['authenticated']) == false){ ?>

    <form action = "#" id="password_control" method="POST">
<h2 style = "text-align: left; font-size: 24px; margin-bottom: 10px;">Shkruani fjalekalimin per te vazhduar </h2>
<div class="form-group">
<input class="form-control form-control-lg" type="password" name="password" autofocus placeholder="Shenoni fjalekalimin">
</div>  
<button type="submit" class="btn btn-primary mb-2" id="submit" name ="pass_submit">Dergo</button>
</form>
<?php }?>
<?php
if (isset($_POST['pass_submit'])){
$password = $_POST['password'];
if ($password == "sedivalla"){
  $_SESSION['authenticated'] = true;
  header("Location:posts_controller.php");
}
else{
   $_SESSION['authenticated'] = false;
}
}
 ?>

<?php if (($_SESSION['authenticated']) == true){ ?>
   <script type="text/javascript">Swal.fire({
  position: 'center-center',
  type: 'success',
  title: 'Jeni identifikuar me sukses!',
  showConfirmButton: false,
  timer: 1500
})</script>
<div class = "postimet-container">
<!--<div class = "postimet-title">
  Diskuto me shoket
</div>-->


<script type="text/javascript">
function success(){
var i=document.getElementById("abc");
if(i.value=="")
    {
    document.getElementById("abc2").disabled=true;
    }
else
    document.getElementById("abc2").disabled=false;}
function searchfunction(){
var i=document.getElementById("search");
if(i.value=="")
    {
    document.getElementById("search-submit").disabled=true;
    }
else
    document.getElementById("search-submit").disabled=false;}




</script>

<?php


  //Dergimi i komentit te ndryshuar




//


 //Shfaqja e postimeve me search

  if(isset($_GET['keyword'])){
    $vitiakademik = $_SESSION['vitiakademik'];
$search_term = $_GET['keyword'];
$search_term = trim($search_term);
//$search_term = preg_replace("#[^0-9a-z]#i", "", $search_term);
    $sql = "SELECT * FROM userposts
WHERE (academicyear='1' or academicyear='2' or academicyear='3') AND replyingto is null AND Comments  LIKE '%$search_term%'
ORDER BY id DESC";

//$sql = "SELECT * FROM userposts
//WHERE academicyear='$vitiakademik' AND Name LIKE '%$search_term%' OR Surname LIKE '%$search_term%' OR Comments LIKE '%$search_term%'
//ORDER BY id";



    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo "<div class='search-term-display' style = 'padding-top:20px'>Rezultatet e kerkimit per: ". $search_term. " | ".$count. " rezultate". "</div>";
    echo'<div class="dropdown-divider"></div>'; 
   // if((preg_match('/^\s+$/', $search_term)) == 1){
 //header("Location:group.php");
//}

    if (ltrim($search_term, ' ') === '') {
header("Location:posts_controller.php");
    }
if($count == 0) {
  echo '<style>#rezultatet { display:none;}</style>';
        echo '<div class = "rezultatet-error">';
        echo '<img src = "img/1f914.png" style = "width:40px"/>'; 
        echo '<br>';
        echo "Asnje postim i gjetur";
         echo '</div>'; 
    }
    else if(empty($search_term)){
      header("Location:posts_controller.php");
    }
    


    else{
    while(($row = $query->fetch_assoc()) !== null){ 

$row['Name'] = strtolower($row['Name']);
                         $row['Surname'] = strtolower($row['Surname']);
                         $row['Name'] = ucfirst($row['Name']);
                         $row['Surname'] = ucfirst($row['Surname']);
                         echo '<div class = "posts">'; 
                         echo' <div class = "datetime">';
                         echo $row['date'] . " | " . $row['time'];
                         if ($row['edited'] == 1){
                         echo' <span style = "color: #9E9E9E"> (E ndryshuar) </span> ';
                         }
                         echo'</div>';

if (($_SESSION['username']) == "ilirperolli"){
                          
                         //  echo '<a href = "group.php?remove-comment='. $row3['id'].'"><img src = "1282956.png" class = "remove-comment" title = "Fshij Komentin"> </a>';

                            echo '<form action="#" method="post" style = "position:absolute; right:0">
                            
                            <button name="delete-comment" title = "Fshij Komentin" type="submit" value="'. $row['id'].'" style = "padding: 0;border: none;background: none; cursor:pointer;position:absolute; right:0;">
                            <img src="img/1282956.png" class = "remove-comment"/>

                            </button>
                           
                              </form>';
                     
                                if (isset($_POST['delete-comment'])){
                                  $value = $_POST['delete-comment'];
 $query100 = "SELECT * FROM userposts WHERE id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == "ilirperolli"){
                                header('Location:posts_controller.php?remove-comment='. $value);

                              }
                              else {
                                header('Location:posts_controller.php');
                              }}

                              }
                        }  
                        echo '<div class = "foto-container">'; 
                        echo '<img src = "user-photos/'. $row['photo'].'" class = "foto">'; 
                        echo '<br>';
                        echo '<div class = "emri">';
                        echo $row['Name']. " " . $row['Surname'];
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class = "pershkrimi" style = "text-align:left;">';
                        if ($row['uploadedphoto'] != null){
                           echo '<a href = "userpostsUploads/'. $row['uploadedphoto'].'" target="_blank" title="Kliko per ta zmadhuar"/><img src = "userpostsUploads/'. $row['uploadedphoto'].'" class= "uploadedphoto"/></a>'; 
                         echo '<br>';
                        }
                        
                        //Paraqit komentin si tekst e jo si kod te html
                        echo htmlspecialchars($row['Comments']);

                        
                        
                        //

                        echo '<div class="dropdown-divider"></div>';
                         echo '</div>';
                         $id = $row['id'];

                         //Shfaqja e replysave


                        $query1 = "SELECT * FROM userposts WHERE (academicyear='1' or academicyear='2' or academicyear='3') AND replyingto = '$id' ORDER BY id";
            $results1 = mysqli_query($db, $query1);




                        while(($row1 = $results1->fetch_assoc()) !== null){
  

                         $row1['Name'] = strtolower($row1['Name']);
                         $row1['Surname'] = strtolower($row1['Surname']);
                         $row1['Name'] = ucfirst($row1['Name']);
                         $row1['Surname'] = ucfirst($row1['Surname']);
                         echo '<div class = "posts" style = "background:#E7E8EA; margin-top:20px !important;">'; 
                         echo' <div class = "datetime">';
                         echo $row1['date'] . " | " . $row1['time'];
                         if ($row1['edited'] == 1){
                         echo' <span style = "color: #9E9E9E"> (E ndryshuar) </span> ';
                         }
                         echo'</div>';

                         if (($_SESSION['username']) == "ilirperolli"){
                          
                         //  echo '<a href = "group.php?remove-comment='. $row3['id'].'"><img src = "1282956.png" class = "remove-comment" title = "Fshij Komentin"> </a>';

                            echo '<form action="#" method="post" style = "position:absolute; right:0">
                            
                            <button name="delete-comment" title = "Fshij Komentin" type="submit" value="'. $row1['id'].'" style = "padding: 0;border: none;background: none; cursor:pointer;position:absolute; right:0;">
                            <img src="img/1282956.png" class = "remove-comment"/>

                            </button>
                           
                              </form>';
                      
                                if (isset($_POST['delete-comment'])){
                                  $value = $_POST['delete-comment'];
 $query100 = "SELECT * FROM userposts WHERE id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == "ilirperolli"){
                                header('Location:posts_controller.php?remove-comment='. $value);

                              }
                              else {
                                header('Location:posts_controller.php');
                              }}

                              }
                        }  

                       echo '<div class = "foto-container" style = "margin-left:0px; left:0; margin-right:350px;">'; 
                        echo '<img src = "user-photos/'. $row1['photo'].'" class = "foto" style = "width:50px; height:50px;margin-top:10px">'; 
                        echo '<br>';
                        echo '<div class = "emri" style = "font-size:23px;">';
                        echo $row1['Name']. " " . $row1['Surname'];
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class = "pershkrimi" style = "text-align:left; margin-left:85px; margin-right:120px;">';
                        //Paraqit komentin si tekst e jo si kod te html
                        echo htmlspecialchars($row1['Comments']);
                        
                       
                        
                        //

                         echo '</div>';
      echo '</div>';
                        

}
                        echo '</div>';

                   
    }
}
   echo '<div class = "rezultatet" id="rezultatet">'; 
echo "Fundi i rezultateve";
 echo '</div>';  
 }
 //Shfaqja e postimeve pa search

else{

                  echo "<br>";

                         while(($row3 = $results3->fetch_assoc()) !== null){
                         


                         $row3['Name'] = strtolower($row3['Name']);
                         $row3['Surname'] = strtolower($row3['Surname']);
                         $row3['Name'] = ucfirst($row3['Name']);
                         $row3['Surname'] = ucfirst($row3['Surname']);
                         echo '<div class = "posts">'; 
                         echo' <div class = "datetime">';
                         echo $row3['date'] . " | " . $row3['time'];
                         if ($row3['edited'] == 1){
                         echo' <span style = "color: #9E9E9E"> (E ndryshuar) </span> ';
                         }
                         echo'</div>';

                         if (($_SESSION['username']) == "ilirperolli"){
                          
                         //  echo '<a href = "group.php?remove-comment='. $row3['id'].'"><img src = "1282956.png" class = "remove-comment" title = "Fshij Komentin"> </a>';

                            echo '<form action="#" method="post" style = "position:absolute; right:0">
                            
                            <button name="delete-comment" title = "Fshij Komentin" type="submit" value="'. $row3['id'].'" style = "padding: 0;border: none;background: none; cursor:pointer;position:absolute; right:0;">
                            <img src="img/1282956.png" class = "remove-comment"/>

                            </button>
                         

                              </form>';
                      
                                if (isset($_POST['delete-comment'])){
                                  $value = $_POST['delete-comment'];
 $query100 = "SELECT * FROM userposts WHERE id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == "ilirperolli"){
                                header('Location:posts_controller.php?remove-comment='. $value);

                              }
                              else {
                                header('Location:posts_controller.php');
                              }}

                              }
                        }  

                        echo '<div class = "foto-container">'; 
                        echo '<img src = "user-photos/'. $row3['photo'].'" class = "foto">'; 
                        echo '<br>';
                        echo '<div class = "emri">';
                        echo $row3['Name']. " " . $row3['Surname'];
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class = "pershkrimi" style = "text-align:left;">';
                        if ($row3['uploadedphoto'] != null){
                           echo '<a href = "userpostsUploads/'. $row3['uploadedphoto'].'" target="_blank" title="Kliko per ta zmadhuar"/><img src = "userpostsUploads/'. $row3['uploadedphoto'].'" class= "uploadedphoto"/></a>'; 
                         echo '<br>';
                        }
                        
                        //Paraqit komentin si tekst e jo si kod te html
                        echo htmlspecialchars($row3['Comments']);

                     
                        
                        //
                        echo '<div class="dropdown-divider"></div>';
                         echo '</div>';


//Shfaqja e Replysave
               $id = $row3['id'];
                        $query = "SELECT * FROM userposts WHERE (academicyear='1' or academicyear='2' or academicyear='3') AND replyingto = '$id' ORDER BY id";
            $results = mysqli_query($db, $query);





while(($row = $results->fetch_assoc()) !== null){
  

                         $row['Name'] = strtolower($row['Name']);
                         $row['Surname'] = strtolower($row['Surname']);
                         $row['Name'] = ucfirst($row['Name']);
                         $row['Surname'] = ucfirst($row['Surname']);
                         echo '<div class = "posts" style = "background:#E7E8EA; margin-top:20px !important;">'; 
                         echo' <div class = "datetime">';
                         echo $row['date'] . " | " . $row['time'];
                         if ($row['edited'] == 1){
                         echo' <span style = "color: #9E9E9E"> (E ndryshuar) </span> ';
                         }
                         echo'</div>';

                         if (($_SESSION['username']) == "ilirperolli"){
                          
                         //  echo '<a href = "group.php?remove-comment='. $row3['id'].'"><img src = "1282956.png" class = "remove-comment" title = "Fshij Komentin"> </a>';

                            echo '<form action="#" method="post" style = "position:absolute; right:0">
                            
                            <button name="delete-comment" title = "Fshij Komentin" type="submit" value="'. $row['id'].'" style = "padding: 0;border: none;background: none; cursor:pointer;position:absolute; right:0;">
                            <img src="img/1282956.png" class = "remove-comment"/>

                            </button>
                           
                              </form>';
                      
                                if (isset($_POST['delete-comment'])){
                                  $value = $_POST['delete-comment'];
 $query100 = "SELECT * FROM userposts WHERE id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == "ilirperolli"){
                                header('Location:posts_controller.php?remove-comment='. $value);

                              }
                              else {
                                header('Location:posts_controller.php');
                              }}

                              }
                        }  

                        echo '<div class = "foto-container" style = "margin-left:0px; left:0; margin-right:350px;">'; 
                        echo '<img src = "user-photos/'. $row['photo'].'" class = "foto" style = "width:50px; height:50px;margin-top:10px">'; 
                        echo '<br>';
                        echo '<div class = "emri" style = "font-size:23px;">';
                        echo $row['Name']. " " . $row['Surname'];
                        echo '</div>';
                        echo '</div>';
                        
                        echo '<div class = "pershkrimi" style = "text-align:left; margin-left:85px; margin-right:120px;">';
                        //Paraqit komentin si tekst e jo si kod te html
                        echo htmlspecialchars($row['Comments']);

                      
                        
                        //
                         echo '</div>';
      echo '</div>';
                        

}                


                     
                        echo '</div>';
                      


                        
                        }
                        echo'<div id ="postimet">
                        Asnje postim nuk u gjet <br>
                        <img src = "img/flat-person-sleeping-bed_23-2148146864-removebg-preview.png"/>
                        </div>';

                      }
                      }
                     
                         
?>





</div>

</div>


</div>
</body>
</html>
