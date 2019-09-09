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
  <?php 

$emri = $_SESSION['emri'];
$mbiemri = $_SESSION['mbiemri'];
$emri = strtolower($emri);
$mbiemri = strtolower($mbiemri);
$emri = ucfirst($emri);
$mbiemri = ucfirst($mbiemri);
echo "<title>".$emri. " ". $mbiemri. " - Preferencat". " </title>";
  
  ?>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} //Mos u submit nese bohet refresh faqja
</script>
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
    padding-left: 0px; 
     height:auto;
    padding-top:45px !important;    
     padding: 20px 40px;
     box-sizing: border-box;
     background: white;
     -webkit-box-shadow: 0px 10px 13px -7px #000000, 0px 8px 25px 10px rgba(0,0,0,0.25);
     box-shadow: 0px 10px 13px -7px #000000, 0px 8px 25px 10px rgba(0,0,0,0.25);
     border-radius: 20px;
     margin-top:110px;


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
  }
 

 @media screen and (max-width:1250px){
   .contact-form{
 width:95% !important;
 margin-top:100px !important; 
padding-top:15px !important; 
 }
 .info{
 width:100% !important;
 margin-left: 0px !important;
height: auto !important;
padding-top: 0px !important;
padding-right: 0px !important;
 }
 #info{
padding-top: 20px !important;
 }
 .contact-form h2 {
  margin-top: 10px !important;
   width:100% !important;
   text-align: center !important; 
 }
 .info-user{
  margin-top: 0px !important;
 }
}


.contact-form h2 {
    margin: 0;
    padding: 0 0 20px;
    color: black;
    font-family: 'SamsungSharpSans-Bold';
      font-weight: 200;
      font-size: 35px;
      margin:0;
    text-align: right;
    text-transform: uppercase;
    
    width:60%;
    margin:auto;
    

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
.contact-form input[type="text"],
.contact-form input[type="password"],.contact-form input[type="email"],.contact-form input[type="number"]
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


}

.contact-form input[type="text"]:focus{
   border: 1px solid rgb(0, 132, 137);
}
.contact-form input[type="password"]:focus{
   border: 1px solid rgb(0, 132, 137);
}
.contact-form input[type="number"]:focus{
   border: 1px solid rgb(0, 132, 137);
}
.contact-form input[type="email"]:focus{
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
  margin-bottom: 5px;

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
.max-width{
  margin:auto;
      text-align: center;
      max-width: 1300px;
      margin-top:50px;
}
.info{
  width: 380px;
  height:450px;
  overflow: auto;
  display: inline-block;
  margin-left:15px;

 

}
.info::-webkit-scrollbar {
    width: 0.7em;
    
   
}
.info::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
     border-radius: 10px;
}
 
.info::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
  border-radius: 10px;
}

.name{
padding: 20px;
font-size: 35px;
  font-family:SamsungSharpSans-Bold;
}
.info-user{
 
  margin-top: 0px;
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
<div class = "max-width">
   <form action="#" method="POST">
  <div class = "contact-form">
 <h2>Ndrysho te dhenat</h2>
    <div class = "info" style = "margin-left: 0px;">
      <div class=  "info-user">
<?php
                        echo '<img src = "user-photos/'. $row['userphotos'] . '" class = "avatar"/>';
                         ?>
                   
     <a href = "edit-photo.php"> Ndrysho Foton </a>
     <script type="text/javascript">
  var cw = $('.avatar').width();
$('.avatar').css({
    'height': cw + 'px'
});
</script>
          <div class = "name">
<span style = "color:black"><?php echo $row['Name'] ?> </span><span style = "  color:#9E9E9E;" ><?php echo $row['Surname'] ?></span>
</div>
 <i style ="font-size:13px;"> Anetare qe nga: <?php echo $row['joined'];?> </i>
</div>
    </div>
    <div class = "info" style = "padding-top: 28px;" id = "info">
     
       <p id="emri">Emri</p>

  <input name="emri" value ="<?php if (isset($_POST['emri'])){echo $_POST['emri'];} else{ echo $row['Name'];}?>" type="text" placeholder="Shenoni Emrin" oninvalid="this.setCustomValidity('Ju lutem shenoni emrin'); document.getElementById('emri').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('emri').style.color='black'" required/>
  
  <p id = "mbiemri">Mbiemri</p>
  <input name="mbiemri" value ="<?php if (isset($_POST['mbiemri'])){echo $_POST['mbiemri'];} else{ echo $row['Surname'];}?>" type="text" placeholder="Shenoni Mbiemrin" oninvalid="this.setCustomValidity('Ju lutem shenoni mbiemrin') ; document.getElementById('mbiemri').style.color='#FA3B4B'"
    oninput="this.setCustomValidity('') ; document.getElementById('mbiemri').style.color='black'" required/>
   <p id = "mosha">Mosha</p>
  <input name="age" value ="<?php if (isset($_POST['age'])){echo $_POST['age'];} else{ echo $row['age'];}?>" type="number" min="17" max="65" placeholder="Shenoni Moshen" oninvalid="this.setCustomValidity('Ju lutem shenoni moshen') ; document.getElementById('mosha').style.color='#FA3B4B'"
    oninput="this.setCustomValidity('') ; document.getElementById('mosha').style.color='black'" required/>
   <p id = "emaili">Emaili</p>
  <input name="email" value ="<?php if (isset($_POST['email'])){echo $_POST['email'];} else{ echo $row['email'];}?>" type="email" placeholder="Shenoni Emailin" oninvalid="this.setCustomValidity('Ju lutem shenoni emailin') ; document.getElementById('emaili').style.color='#FA3B4B'"
    oninput="this.setCustomValidity('') ; document.getElementById('emaili').style.color='black'" required/>
    </div>
    <div class = "info" style = "padding-top: 28px; padding-right: 5px;">
       <p id = "fjalekalimi">Fjalekalimi i Tanishem</p>
  <input name="password_1" type="password" placeholder="Shenoni Fjalekalimin e Tanishem" value ="<?php if(isset($_POST['password_1'])){echo $_POST['password_1'];}?>" oninvalid="this.setCustomValidity('Ju lutem shenoni fjalekalimin') ; document.getElementById('fjalekalimi').style.color='#FA3B4B'"
    oninput="this.setCustomValidity('') ; document.getElementById('fjalekalimi').style.color='black'" required/>
  <a href = "change_password.php"> Ndrysho Fjalekalimin </a>
<input type="submit" name="preferences" id = "submitbtn"value="Ndrysho">
  <a href = "delete-account.php" class = "deleteacc" title = "Fshij Llogarine"> Fshij llogarine </a>
  <br>
 
  <?php include('errors.php'); ?>
    </div>
   
       
 
     </form>
</div>
</div>
</div>
<br>
</body>
</html>