<?php
// Starto Sesionin
ob_start();
session_start();

// Shiko nese useri eshte i kyqur. Nese jo ridirekto ne login
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
  header("Location: login.php");
}
else if (!isset($_SESSION['loading']) || $_SESSION['loading'] == false) {
  header("Location: login.php");
}
else {
include("config.php");
$username = $_SESSION['username']; 
$query = "SELECT * FROM users WHERE username='$username'";
      $results = mysqli_query($db, $query);
          $row = $results->fetch_assoc(); 
$activity = $row['activity'] + 1;


$sql = "UPDATE users SET activity='$activity' WHERE username='$username'";
    
      mysqli_query($db, $sql);

header('Refresh: 2; URL=index.php');
$_SESSION['loading'] = false;
}

?>
<html>
<head>
<title>Loading... </title>
  <link rel="icon" type="image/png" href="people.png" />
  <script src="jquery-1.8.3.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

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
  .loading{
    font-family:SamsungSharpSans-Medium;
  color: black;
  font-weight: 200;
  font-size: 35px;
  margin:0;
  text-align: center;
  }
  .preload {
    margin:0;
    position:absolute;
    top:50%;
    left:50%;
    margin-right: -50%;
    transform:translate(-50%, -50%);
  }
  .preload-mob{
    display: none;
  }
  @media screen and (max-width:640px){
    .user{
      font-size: 25px !important;
    }
.preload-mob{
  display: block;
  position: relative !important;
  width:100% !important;
  left:0% !important;
  top:0% !important;
  left:0 !important;
  right:0% !important;
  margin:auto !important;
  margin-top: 40% !important;
}
.preload{
  display: none;
}
.loading-foto{
  width:100% !important;
}
  }
  /* The Loader */

.loader {
    /* Size and position */
    position: relative;
    width: 100px;
    height: 100px;
    margin: 60px auto; /* centering */
 
    /* Styles */
    border-radius: 50%;
    border: 10px solid transparent;
    border-top: 10px solid rgba(0,0,0,0.2); /* sector */

    opacity: 1;
    
    animation: rota 0.5s infinite linear;

  z-index: 11;
}

.loader:after {
    content: "";
    
    width: 60px;
    height: 60px;
    position: absolute;
    top: -60px;
    margin: 60px auto;
    
    /* Styles */
    border-radius: 50%;
    border: 20px solid transparent;
    box-shadow: 0 0 0 10px rgba(0,0,0,0.05); /* track */
}


/* Animation */
@keyframes rota {
    from { }
    to { transform: rotate(360deg); }
}
.user{
   font-family:SamsungSharpSans-Medium;
  color: black;
  font-weight: 200;
  font-size: 35px;
  margin:0;
  text-align: center;
  margin-top:25px;

}  </style>

</head>
<body>
  <div class = "user">

   <?php

$row['Name'] = strtolower($row['Name']);
$row['Name'] = ucfirst($row['Name']);
  echo "Pershendetje ".$row['Name']. " 🙂"; ?>
  </div>
  <div class = "preload">
    <div class="loader"></div>
    <h2 class = "loading"> Ju lutem prisni... </h2>
  </div>
  <div class = "preload-mob">
    <div class="loader"></div>
    <h2 class = "loading"> Ju lutem prisni... </h2>
  </div>
  <div class = "content">
  </div>
</body>
</html>
