<?php
    // Starto Sesionin
    ob_start();
  
      include("server.php");


    // Shiko nese eshte i kyqur. Nese jo ridirekto ne login
    include ("verify_user.php");
     include("check-vitiakademik.php");

?>
<?php 


  // lidhu me databaze
include("config.php");
$emri = $_SESSION['emri'];
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE Name='$emri' AND username='$username'";
$results = mysqli_query($db, $query);
					$row = $results->fetch_assoc();	
				

     

 ?>
 


<html>
<head>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} //Mos u submit nese bohet refresh faqja
</script>
	<title> Preferencat </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="icon" type="image/png" href="people.png" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Refresh" content="600">
<link rel = "stylesheet" type = "text/css" href = "stili.css"/>
<link rel = "stylesheet" type = "text/css" href = "nav-stili.css"/>
<link rel = "stylesheet" type = "text/css" href = "subscribe-stili.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<meta name="theme-color" content="#2f476d">
<meta name="msapplication-navbutton-color" content="#2f476d">
<meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<script src="navi.js"></script>

<style>

body,html{
  margin:0;
  padding: 0;

}
 *{
   margin: 0;
   padding: 0;
   font-family:SamsungSharpSans-Bold;
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
     margin-top:100px;

 }   @media screen and (max-width:640px){
.avatar{
  width: 250px !important;
}
  }
  @media screen and (max-width:400px){
.avatar{
  width: 100% !important;
}
  }
 
 @media screen and (max-width:959px){
 .contact-form{
 width:95% !important;

 }
}.contact-form h2 {
    margin: 0;
    padding: 0 0 20px;
    color: black;
    font-family: 'SamsungSharpSans-Bold';
      font-weight: 200;
      font-size: 35px;
      margin:0;
    text-align: center;
    text-transform: uppercase;

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
  
  border-radius: 50%;
display: block;
margin: 0 auto;
}
.contact-form input
{
    width: 100%;
    margin-bottom: 20px;

}
.contact-form input[type="text"],
.contact-form input[type="password"],.contact-form input[type="email"],.contact-form input[type="number"]
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    border-radius: 0px;

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
h1{
 position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: SamsungSharpSans-Medium;
    font-size: 50px;
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
.contact-form .deleteacc {
   
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
    padding:5px;
}
.contact-form .deleteacc:hover {
background: #e9e9e9;
text-decoration: none;
}

</style>
</head>
<body>

  
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

  <a class="navbar-brand" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:35px;">amici profili</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" id = "Kryefaqja">
        <a class="nav-link" href="index.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Kryefaqja</a>
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

<div style="text-align:center"/>
  <div class = "contact-form">
    <form action="#" method="POST">
       <?php
                        echo '<img src = "user-photos/'. $row['userphotos'] . '" class = "avatar"/>';
                         ?>
     
     <br><script type="text/javascript">
  var cw = $('.avatar').width();
$('.avatar').css({
    'height': cw + 'px'
});
</script>
    <h2>Ndrysho Fjalekalimin</h2>

  <p id = "fjalekalimi1">Fjalekalimi i Tanishem</p>
  <input name="password_1" type="password" placeholder="Shkruani Fjalekalimin e Tanishem" value ="<?php if(isset($_POST['password_1'])){echo $_POST['password_1'];}?>" oninvalid="this.setCustomValidity('Ju lutem shkruani fjalekalimin e tanishem'); document.getElementById('fjalekalimi1').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('fjalekalimi1').style.color='black'" required  />
   <p id = "fjalekalimi2">Fjalekalimi i Ri</p>
  <input name="password" type="password" placeholder="Shkruani Fjalekalimin e Ri" value ="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>" oninvalid="this.setCustomValidity('Ju lutem shkruani fjalekalimin e ri'); document.getElementById('fjalekalimi2').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('fjalekalimi2').style.color='black'" required />
     <p id = "fjalekalimi3">Rishkruaj Fjalekalimin</p>
  <input name="password_2" type="password" placeholder="Rishkruani Fjalekalimin e Ri" value ="<?php if(isset($_POST['password_2'])){echo $_POST['password_2'];}?>" oninvalid="this.setCustomValidity('Ju lutem rishkruani fjalekalimin e ri'); document.getElementById('fjalekalimi3').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('fjalekalimi3').style.color='black'" required  />
 <input type="submit" name="update_password" value="Ndrysho">
  <?php include('errors.php'); ?>
     </form>

</div>

</div>
<br>
</body>
</html>