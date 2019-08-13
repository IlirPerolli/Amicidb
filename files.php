<?php
    // Starto sesionin
    ob_start();
    session_start();
    include ("verify_user.php");
    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
  include("check-vitiakademik.php");
        // lidhu me databaze
include("config.php");
include("files-upload.php");
$username = $_SESSION['username'];
$query= "UPDATE users SET notification_uploads = '0' WHERE username = '$username'";
      mysqli_query($db, $query);

?>
<?php
  if (isset($_GET['remove-file'])){
   
     
$number=$_GET['remove-file'];

 $query100 = "SELECT * FROM userfiles WHERE id='$number'";
                                    $results100 = mysqli_query($db, $query100);
                                    $row100 = $results100->fetch_assoc();
if ($_SESSION['username'] == $row100['username']){
      $query = "SELECT * FROM userfiles WHERE id='$number'";

$results = mysqli_query($db, $query);
          $row = $results->fetch_assoc(); 
      
              $file = $row['file'];
          $myFile = "user-files/$file";
unlink($myFile); 
//unlink($myFile) or die(Header("Location:files.php"));


            $sql = "DELETE from userfiles where id='$number'";
    
      mysqli_query($db, $sql);
      header("Location:files.php");

}
else{
   header("Location:files.php");
}

   }
?>

<html>
<head>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
} //Mos u submit nese bohet refresh faqja
</script>
  <title> Dosjet </title>
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
  <link rel = "stylesheet" type = "text/css" href = "files-stili.css">
  <script src="navi.js"></script>



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
          <a class="dropdown-item" href="librat-viti3.php" id ="librat-viti3" style = "font-family: 'SamsungSharpSans-Bold'; font-size:17px;">Librat Viti III</a>
        </div>
      </li>
      <a class="nav-link active" href="files.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Dosjet <span class="sr-only">(current)</span></a>
     <a class="nav-link" href="group.php" style = "font-family: 'SamsungSharpSans-Bold'; font-size:20px;">Grupi <span id = "notification-counter"> <?php echo $_SESSION['notification'] ?> </span> <span class="sr-only">(current)</span></a>
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

  <br><br><br><br><br><br>
  <div style = "text-align:center">


<div class = "container">
<br>

<form method="POST" enctype="multipart/form-data" action="#" class = "forma-bootstrap">
<div class="input-group mb-3">

  <div class="custom-file">
    <input type="file" class="custom-file-input" value="Browse" name="file" id="inputGroupFile03">
    <label class="custom-file-label" for="inputGroupFile03">Zgjedh nje Dokument (Max: 8MB)</label>

  </div>
    <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" name = "files" type="submit">Ngarko</button>
  </div>
</div>
</form>

<form method="POST" enctype="multipart/form-data" action="#" class = "forma-default">
  <div class = "file-container">
  <div class = "fajli"><input type='file' id="aa" value="Browse" name="file" onchange="pressed()"><label id="fileLabel">Zgjedh nje Dokument (Max: 8MB)</label></div>

<input type="submit" name="files" value="Ngarko">
</div>
</form>


<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
 <?php 

 include('errors.php');
 echo '<br>';
 $vitiakademik = $_SESSION['vitiakademik'];
 $query = "SELECT * FROM userfiles WHERE academicyear='$vitiakademik' ORDER BY id DESC ";
            $results = mysqli_query($db, $query);

           
            if (mysqli_num_rows($results) == 0 ){
              echo "<br>";
              echo "<p style = 'color:red'> Nuk u gjet asnje dokument </p>";
              
            }
               while(($row = $results->fetch_assoc()) !== null){ 
               echo '<div class = "download-container">';

               echo '<div class = "download-name" title = "'.$row['file'] .' ">';
               if (strlen($row['file']) > 46){
                
                $file_name = $row['file'];
                $file_name = substr($file_name, 0, 44);
                $file_name = $file_name . " ...";
                echo $file_name;
               }
               else {
                echo $row['file'];
               }
               echo "</div>";
              if (strpos($row['file'],'.jpg') !== false || strpos($row['file'],'.JPG') !== false || strpos($row['file'],'.JPEG') !== false || strpos($row['file'],'.jpeg') !== false || strpos($row['file'],'.png') !== false || strpos($row['file'],'.PNG') !== false ) {

                echo '<img src = "user-files-logos/576bf2589ce70.png" class = "download-photo"/>';

               }

               else if (strpos($row['file'],'.docx') !== false){
                echo '<img src = "user-files-logos/word.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.pdf') !== false){
                echo '<img src = "user-files-logos/pdf.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.pptx') !== false){
                echo '<img src = "user-files-logos/powerpoint.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.apk') !== false){
                echo '<img src = "user-files-logos/apk.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.xlsx') !== false){
                echo '<img src = "user-files-logos/excel.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.txt') !== false){
                echo '<img src = "user-files-logos/txt.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.html') !== false){
                echo '<img src = "user-files-logos/html.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.php') !== false){
                echo '<img src = "user-files-logos/php.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.ipa') !== false){
                echo '<img src = "user-files-logos/ipa.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.py') !== false){
                echo '<img src = "user-files-logos/py.png" class = "download-photo"/>';
               }
                else if (strpos($row['file'],'.css') !== false){
                echo '<img src = "user-files-logos/css.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.gif') !== false){
                echo '<img src = "user-files-logos/gif.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.rar') !== false){
                echo '<img src = "user-files-logos/rar.png" class = "download-photo"/>';
               }
               else if (strpos($row['file'],'.zip') !== false){
                echo '<img src = "user-files-logos/zip.png" class = "download-photo"/>';
               }
               
               else {
                echo '<img src = "https://image.flaticon.com/icons/svg/148/148947.svg?fbclid=IwAR1qMT-iyh6nQNlIyVNu4VaFEiLQoRa4FUZD5iv8xM5ZjL3h_nYbFTi-y_k" class = "download-photo"/>';
               }



              
               echo "<div class = 'download-content'>";
               echo '<div class = "date-time">';
               echo $row['date'];
               echo '</div>';
              
                
               echo '<button type="button" title = "Info" class="btn btn-light" data-toggle="modal" data-target="#modal_'.$row['id'].'" style = "display:inline-block">
  <img src= "user-files-logos/more.png" style = "width:20px;"/>
</button>';
              
               echo '</div>';
                
               echo '</div>';

               //Modal Fade
               echo '<div class="modal fade" id="modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
              echo '<div class="modal-dialog modal-dialog-centered" role="document">';
echo '<div class="modal-content">';
      echo '<div class="modal-header">';
echo '<h5 class="modal-title" id="exampleModalCenterTitle">Rreth Dokumentit</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
          echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
      echo '</div>';
      echo '<div class="modal-body">';
        echo 'Emri i dokumentit: ' . $row['file'];
        echo '<br>';
        echo 'Ngarkuesi: ' . $row['Name']. " " . $row['Surname'];
         echo '<br>';
        echo 'Data: ' . $row['date'];
        echo '<br>';
        echo 'Ora: ' . $row['time'];
      echo '</div>';
      




      echo '<div class="modal-footer">';
      echo '<form action="#" method="post" id = "download-form">';
       echo ' <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll </button>';
        echo '<a class="btn btn-light" id = "download" role="button" href="user-files/'.$row['file'].'"
         download>
        Shkarko
        </a>';
     

        if (($_SESSION['username']) == $row['username']){

        echo '<button type="submit" name="delete-file" class="btn btn-danger" id = "delete-button" value="'. $row['id'].'">Fshij</button>';
       
      }
         echo '</form>';
              echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    //
     if (isset($_POST['delete-file'])){
                                  $value = $_POST['delete-file'];
 $query100 = "SELECT * FROM userfiles WHERE id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == $row100['username']){
                                header('Location:files.php?remove-file='. $value);

                              }
                              else {
                                header('Location:files.php');
                              }}

                              }
               }
?>
<br>

<!--
<div class = "download-container">
  <div class = "download-name">
    dokumenti dokumenti dokumenti dokumenti 

  </div>
<img src = "https://icdn8.digitaltrends.com/image/jupiters-colourful-palette-1280x1280.jpg" class = "download-photo"/>
<div class = "download-content">
<div class = "date-time"> 12/08/2019</div>
 <div class = "view-download">
    <a target="_blank" href="https://icdn8.digitaltrends.com/image/jupiters-colourful-palette-1280x1280.jpg" title = "Shiko kete foto"><img src= "https://image.flaticon.com/icons/svg/1666/1666578.svg?fbclid=IwAR0okj2yL_ZMrTHyXcZJhI-ov8YlcxqasJlamnJSJAwMIG7atHAjb4J7RQo"/></a>
     <img src="https://image.flaticon.com/icons/svg/130/130991.svg?fbclid=IwAR2PhKG3auj9zFLAM7HkFK93cwIkr6qJE_MVcRsEKnYttlgIO1IADL7tdiM">
  </div>
  </div>
</div>
-->










<br><br>
</div>

     <script type="text/javascript">
  var cw = $('.download-photo').width();
$('.download-photo').css({
    'height': cw + 'px'
});
</script>


</body>
</html>
