<?php
    // Starto Sesionin
    ob_start();
      include("config.php");
      include("server.php");


    include ("verify_user.php");
     include("check-vitiakademik.php");

     //definimi i vitit akademik per shfaqjen e shokeve
$vitiakademik = $_SESSION['vitiakademik'];
$query = "SELECT * FROM users WHERE academicyear='$vitiakademik' AND verification='1' ORDER BY Name";
           $results = mysqli_query($db, $query);


?>
<?php
$emriifajlit = $_SESSION['username'];
if (isset($_POST['abonohu'])){
$abonimi = $_POST['abonohu'];
$file = fopen("abonimet/$emriifajlit.txt", "w+") or die ("file not open");
$s = "Emaili: ".$abonimi."\n";
fputs($file, $s) or die("Data not write");
fclose($file);


} 

 ?>




<html>
<head>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} //Mos u submit nese bohet refresh faqja
</script>

	<title> Kryefaqja </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="people.png" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Refresh" content="600">
<link rel = "stylesheet" type = "text/css" href = "stili.css"/>
<link rel = "stylesheet" type = "text/css" href = "subscribe-stili.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<meta name="theme-color" content="#2f476d">
<meta name="msapplication-navbutton-color" content="#2f476d">
<meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> <!-- Skripta per chart -->
<script src="navi.js"></script>

<style>

body,html{
  margin:0;
  padding: 0;

}
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

.error-message{
      background-color: rgba(200, 231, 111, .8);
      padding:10px;
      display: none;
      z-index: 999;
      color:#496e16;
      font-size: 18px;
      margin-top: 78px;
      text-align: center;
      font-family: SamsungSharpSans-Medium;
     
}
#remove-error{
padding:10px;
font-size: 50px;
float:right;
line-height: 7px;
color:#cd1c07;
cursor: pointer;
}





</style>
</head>
<body>
   <div class = "error-message" id = "error-message"> <b>Njoftim:</b> Ju tani jeni t&euml; abonuar
<div id = "remove-error" onclick="removeError()"> &times; </div>
  </div>
  <?php
  if (isset($_POST['abonohu'])){
  echo "<script type='text/javascript'>document.getElementById('error-message').style.display = 'block'</script>";
}
?>
  
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="#" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici ballina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" id = "Kryefaqja">
        <a class="nav-link" href="#" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Kryefaqja <span class="sr-only">(current)</span></a>
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
      
      
     <?php  if ((($_SESSION['username']) == "ilirperolli") || (($_SESSION['username']) == "arianitjaka") || (($_SESSION['username']) == "K") ) {
        
       echo' <a class="nav-link" href="admin.php" style = "font-family:SamsungSharpSans-Bold; font-size:20px;"> Admin </a>';
    }?>

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
    
    <?php echo($_SESSION['emri']. " ". $_SESSION['mbiemri']);?>
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

<div style="text-align:center">

<script src = "librat.js"></script>
<script>
function removeError(){
document.getElementById("error-message").style.display = "none";
}

</script>

<div class = "cover">
  <div style="text-align:center">
<div class = "titulli">
 amici <span class= "br"> <br> <br></span>   <div class="slidingVertical">
      <span class = "titulli-llogaria">llogaria</span>
      <span class = "titulli-librat">librat</span>
      <span class = "titulli-dosjet">dosjet</span>
      <span>grupi</span>
      <span>profili</span>
    </div>
  
</div>
</div>
</div>

<a href = "group.php" title = "amici grupi" style = "text-decoration: none">
<div class = "shoket">
  <div class = "max-width">
  <div class = "shoket-container" id = "shoket-text">
  <div class = "shoket-titulli">
        Bisedo<br>me<br>shoket
      </div>
  </div>
  <div class = "shoket-container" id = "shoket-foto">
  <img src = "img/characters-people-holding-positive-emoticons-illustration_53876-26818.jpg"/>
  </div>
</div>
</div>
</a>
<div class = "max-width">
<div class = "librat">
<div class = "librat-titulli">
    Libraria

  </div>
<img src = "img/67541986_338122040458177_8202947752183726080_n.jpg"/>
</div>
<a href="files.php" title = "amici dosjet" style = "text-decoration: none">
<div class = "dosjet">
  <div class = "dosjet-titulli">
    Shperndaj dosje

  </div>
<img src = "img/people-with-selected-folder-icon_53876-28554.jpg"/>
</div>
</a>

</div>

<div class = "profili">
<div class = "max-width">

 <div class = "profili-container" id = "profili-text">
  <div class = "profili-titulli">
       Profili juaj
      </div>
      <div class="profili-redirect">
        Kliko <a href = "edit_profile.php" title="amici profili"> ketu</a> per te ndryshuar te dhenat tuaja.
      </div>
  </div>
   <div class = "profili-container">
<img src = "img/67274079_440731676515024_5980560389937561600_n.jpg"/>
  </div>

</div>
</div>
 <?php
     $querycheck = "SELECT * FROM users WHERE gender=0";
      $results = mysqli_query($db, $querycheck);
      $femra = mysqli_num_rows($results);
      $querycheck1 = "SELECT * FROM users WHERE gender=1";
      $results1 = mysqli_query($db, $querycheck1);
      $meshkuj = mysqli_num_rows($results1);
      $_SESSION['meshkuj'] = $meshkuj;
      $_SESSION['femra'] = $femra;
      $totali = $meshkuj + $femra;
      $meshkujneperqindje = (100 * $meshkuj) / $totali;
      $femraneperqindje = (100 * $femra) / $totali;
      $meshkujneperqindje = substr($meshkujneperqindje, 0, 5);

      $_SESSION['meshkujneperqindje'] = $meshkujneperqindje;
      $_SESSION['femraneperqindje'] = $femraneperqindje;
  
    ?>
<div class = "charts-title">
Statistikat
</div>

<div class = "charts" id = "puzzlechart">
<img src="img/puzzle.png" class = "diagram-img"/>
<div class = "description-charts">
<?php echo 'Amici filloi punen ne gusht te vitit 2018.'; ?>
</div>
</div>

<div class = "charts">
<img src="img/diagram.png" class = "diagram-img"/>
<div class = "description-charts">
<?php echo 'Ne llogarine amici jane gjithsej ' . $totali . ' anetare.'; ?>
</div>
</div>

<div class = "charts">
  <canvas id="myChart"></canvas>
<div class = "description-charts">
<?php echo 'Nga te gjithe anetaret, '. substr($femraneperqindje, 0,4).'% jane femra ndersa '. substr($meshkujneperqindje, 0,4) . '% jane meshkuj.';?>
</div>
</div>

<script type="text/javascript">
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
   // Tipi i chartit
    type: 'doughnut',

   // Te dhenat e chartit
    data: {
        labels: ['Femra', 'Meshkuj'],
        datasets: [{
            backgroundColor: ['#9E9E9E','#343A40'],
            borderColor:['rgb(243, 243, 243)', 'rgb(243, 243, 243)'],
           data: [ <?php echo $_SESSION['femra']; ?>, <?php echo $_SESSION['meshkuj'];?>]
        }]
    },

    // Konfigurimi
    options: {}
});
</script>
<div class = "max-width">
  <div class = "per-ne-container">
  <div class = "per-ne">
        Rreth nesh
      </div>

<div class = "about-us">
<img src = "img/00100sPORTRAIT_00100_BURST20181002110325788_COVER.jpg" class=  "avatar" /><br>
<div class = "name">
<span style = "color:black">Ilir </span><span style = "  color:#9E9E9E;" >Perolli</span>
</div>
<div class = "description">
U Lind me 20 Korrik 1999 ne qytetin e Gjakoves. Shkollen fillore e kreu ne shkollen "Yll Morina" ndersa te mesmen ne gjimnazin "Hajdar Dushi". Ai vazhdon studimet ne Universitetin "Ukshin Hoti" ne Prizren ne fakultetin e Shkencave Kompjuterike </div>
  
</div>

<div class = "about-us">
<img src = "img/2942A29C-BE11-42FA-B9E3-BE424317DD23.png" class=  "avatar" /><br>
<div class = "name">
<span style = "color:black">Arianit </span><span style = "  color:#9E9E9E;" >Jaka</span>
</div>
<div class = "description">
U Lind me 30 Dhjetor 1998 ne qytetin e Gjakoves. Shkollen fillore e kreu ne shkollen "Yll Morina" ndersa te mesmen ne gjimnazin "Hajdar Dushi". Ai vazhdon studimet ne Universitetin "Ukshin Hoti" ne Prizren ne fakultetin e Shkencave Kompjuterike </div>
 
</div>

<div class = "about-us">
<img src = "img/72BD3B4C-CA35-4863-AFD4-B9E08FD7603A.png" class=  "avatar" /><br>
<div class = "name">
<span style = "color:black">Albi </span><span style = "  color:#9E9E9E;" >Kusari</span>
</div>
<div class = "description">
U Lind me 24 Tetor 1998 ne qytetin e Gjakoves. Shkollen fillore e kreu ne shkollen "Mustafa Bakija" ndersa te mesmen ne gjimnazin "Hajdar Dushi". Ai vazhdon studimet ne Universitetin "Ukshin Hoti" ne Prizren ne fakultetin e Shkencave Kompjuterike </div>

</div>

</div>


</div>

<div class = "subscribe">
<div class = "max-width">
   <div class=  "subscribe-photo" id = "subscribe-mob">
<img src = "img/character-illustration-people_53876-59853.jpg"/>
</div>
   <form action="#" method="POST"  style = "display: inline-block;">
  <div class=  "subscribe-text">
<h1 style = "font-size:45px">Behu pjese e komunitetit amici</h1>
<br>
 <div class="email-box">
      <i class="fas fa-envelope"></i>
      <input class="tbox" type="email" name="abonohu" value="<?php echo($_SESSION['email'])?> " placeholder="Shkruani emailin tuaj..." required>
      <button class="btn" type="submit" name="button">Abonohu</button>
    </div>
</div>
</form>
  <div class=  "subscribe-photo" id = "subscribe-pc">
<img src = "img/character-illustration-people_53876-59853.jpg"/>
</div>



</div>

  </div>
<br>
  
               

</body>
</html>
