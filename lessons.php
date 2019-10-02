<?php
    // Starto Sesionin
    ob_start();
    session_start();
    include("check-vitiakademik.php");
    include("upload-folders.php");
    include("upload-videos.php");
    // Shiko nese useri eshte i kyqur. Nese jo, ridirekto ne login
    include ("verify_user.php");


?>
<?php
  if (isset($_GET['remove-folder'])){
   
     
$number=$_GET['remove-folder'];

 $query100 = "SELECT users.username FROM folders inner join users on folders.id_user = users.id WHERE folders.id='$number'";
                                    $results100 = mysqli_query($db, $query100);
                                    $row100 = $results100->fetch_assoc();
if ($_SESSION['username'] == $row100['username']){
            $sql1= "DELETE from folder_uploads where id_folder='$number'";
            mysqli_query($db, $sql1);
            $sql = "DELETE from folders where id='$number'";
            mysqli_query($db, $sql);
           
            header("Location:lessons.php");

}
else{
   header("Location:lessons.php");
}

   }
     if (isset($_GET['remove-video'])){
$number=$_GET['remove-video'];
$query100 = "SELECT users.username FROM folder_uploads inner join users on folder_uploads.id_user = users.id WHERE folder_uploads.id='$number'";
 $query100 = "SELECT * FROM folder_uploads WHERE id='$number'";
                                    $results100 = mysqli_query($db, $query100);
                                    $row100 = $results100->fetch_assoc();
if ($_SESSION['username'] == $row100['username']){
            $id_folder = $row100['id_folder'];
            $sql = "DELETE from folder_uploads where id='$number'";
    
      mysqli_query($db, $sql);
      header("Location:lessons.php?folder=".$id_folder);
      //header("Location:lessons.php");

}
else{
   header("Location:lessons.php");
}

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

   body{
    margin: 0;
    padding: 0;

    background: rgb(243, 243, 243);
}


  @media screen and (max-width:640px){

  .folder{
  width:48% !important;
  margin-left:1 !important;
  margin-right:1px !important;
  margin-top:30px !important;
  border-radius: 10px !important;
  border: 1px solid black !important;
}
.folder img{
  width:70% !important;
}
#kursori-img{
  width:100% !important;
}
#video-img{
  width:100% !important;
}
.max-width{
  margin-top: 50px !important;
}

input[type="text"]
{
  width:auto !important;
}

  .folder .add-folder{
  width:auto !important;
}

#more-info{
  width: 20px !important;
}}
  @media screen and (max-width:400px){
.modal-footer .btn{
  margin-left: 0px !important;
  width:100% !important;
  margin-top: 5px !important;

}}
@media screen and (max-width:330px){
.folder{
width: 98% !important;
margin-left: 0px !important;
margin-right: 0px !important;
border: 1px solid black !important;
  }}
.bubble{
    margin-top: 150px;
  text-align: center;
  padding:20px; 
}

.folder{
width:300px;
height:420px;
display:inline-block;
background:white;
margin-left:10px;
margin-right:10px;
margin-top:20px;
border: 1.5px solid black;
/*transition:transform.3s;*/
transition: all .2s ease-in-out; 
overflow: hidden;
border-radius: 30px;
word-break: break-word;
}
.folder:hover{
  
  
-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);

}
.folder a{
  text-decoration:none;
  color:black;
    height: 5px !important;
}
.folder a:hover{
  text-decoration:underline;
}
.folder-name{
  padding:20px;
}
.folder-photo{
  width:300px;
  height:280px;
}
  .max-width{
margin:auto;
text-align: center;
max-width: 1300px;
margin-top: 20px;
 }
 .add-folder{
  position:absolute;
    top:50%;
    left:50%;
    margin-right: -50%;
    transform:translate(-50%, -50%);
    width:150px;
    height: 150px; 
 }
   input[type="text"]
{
    border: 1px solid grey;
    padding-left: 8px; 
    padding-right: 8px;
    background-color: #ffffff;
    outline: none;
    height: 48px;
    color: #454545;
    font-size: 17px;
    border-radius: 4px;
    border: 1px solid #EBEBEB;
    width: 400px;

}input[type="text"]:focus{
   border: 1px solid rgb(0, 132, 137) !important;
}
.folder-name h5{
  overflow: hidden;
  height: 50px;
  
}
.modal-footer .btn{
  margin-left: 3px;
}
#folder-form{
  width: 100%;
  text-align: right;
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
      <script type="text/javascript">
          function Invalidname(textbox) {
var characters = textbox.value.split('');

   if (textbox.value == '') {
        textbox.setCustomValidity('Ju lutem shenoni titullin e videos');
      
        
        document.getElementById("name").setAttribute('style', 'border:1px solid #de071c !important');
    document.getElementById("name").style.backgroundColor = "#fef0f0";
        }
    else {
       textbox.setCustomValidity('');
       
        document.getElementById("name").style.border = "1px solid #EBEBEB";
        document.getElementById("name").style.backgroundColor = "#ffffff";
    }
    return true;
}
  function Invalidlink(textbox) {
var characters = textbox.value.split('');

   if (textbox.value == '') {
        textbox.setCustomValidity('Ju lutem shenoni linkun e youtubes');
      
        
        document.getElementById("link").setAttribute('style', 'border:1px solid #de071c !important');
    document.getElementById("link").style.backgroundColor = "#fef0f0";
        }
    else {
       textbox.setCustomValidity('');
       
        document.getElementById("link").style.border = "1px solid #EBEBEB";
        document.getElementById("link").style.backgroundColor = "#ffffff";
    }
    return true;
}
  function Invalidfolder(textbox) {
var characters = textbox.value.split('');

   if (textbox.value == '') {
        textbox.setCustomValidity('Ju lutem shenoni emrin e folderit');
      
        
        document.getElementById("folder").setAttribute('style', 'border:1px solid #de071c !important');
    document.getElementById("folder").style.backgroundColor = "#fef0f0";
        }
    else {
       textbox.setCustomValidity('');
       
        document.getElementById("folder").style.border = "1px solid #EBEBEB";
        document.getElementById("folder").style.backgroundColor = "#ffffff";
    }
    return true;
}

</script>
<br><br><br><br>
   <div style = "text-align:center; margin:auto;">
  <div class = "max-width">

<?php
  if (isset($_GET['folder'])){
    

    $number = $_GET['folder'];
     $querycheck = "SELECT * FROM folders WHERE id='$number'";
      $results = mysqli_query($db, $querycheck);
      if (mysqli_num_rows($results) == 0){
        header("Location:lessons.php");
      }
       $querycheck = "SELECT folder_uploads.id, users.Name, users.Surname, users.username, folder_uploads.upload_name, folder_uploads.link, folder_uploads.photo, folder_uploads.date, folder_uploads.time FROM folder_uploads inner join users on folder_uploads.id_user = users.id WHERE id_folder='$number' order by id asc";
      $results = mysqli_query($db, $querycheck);
      while(($row = $results->fetch_assoc()) !== null){ 
 echo '<div class = "folder">';
 echo' <a href = "'.$row['link'].'" target = "_blank"> <img src = "'.$row['photo'].'" class = "folder-photo" id = "video-img"/></a>';
 echo'<div class = "folder-name">';

  echo '<a href="'.$row['link'].'" target = "_blank" title="'.$row['upload_name'].'"> ';

if (strlen($row['upload_name']) > 37){
                
                $name = $row['upload_name'];
                $name = substr($name, 0, 37);
                $name = $name . " ...";
              
               echo' <h5>'.$name.'</h5>';
               }
               else {
                echo '<h5> '.$row['upload_name'].'<h5>';
               }


  echo'</a>';
 echo '<button type="button" title = "Info" class="btn btn-light" data-toggle="modal" data-target="#modal_'.$row['id'].'" style = "display:inline-block">
  <img src= "user-files-logos/more.png" style = "width:20px;" id = "more-info"/>
</button>';
//Modal Fade
               echo '<div class="modal fade" id="modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
              echo '<div class="modal-dialog modal-dialog-centered" role="document">';
echo '<div class="modal-content">';
      echo '<div class="modal-header">';
echo '<h5 class="modal-title" id="exampleModalCenterTitle">Rreth Videos</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
          echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
      echo '</div>';
      echo '<div class="modal-body" style = "text-align:left">';
        echo 'Emri i videos: ' . $row['upload_name'];
        echo '<br>';
        echo 'Ngarkuesi: ' . $row['Name']." ".$row['Surname'];
         echo '<br>';
        echo 'Data: ' . $row['date'];
        echo '<br>';
        echo 'Ora: ' . $row['time'];
      echo '</div>';
      




      echo '<div class="modal-footer">';
      echo '<form action="#" method="post" id = "folder-form">';
       echo ' <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll </button>';
        

        if (($_SESSION['username']) == $row['username']){

        echo '<button type="submit" name="delete-video" class="btn btn-danger" id = "delete-button" value="'. $row['id'].'">Fshij</button>';
       
      }
         echo '</form>';
              echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    //

 

 if (isset($_POST['delete-video'])){
                                  $value = $_POST['delete-video'];
     $query100 = "SELECT users.username FROM folder_uploads inner join users on folder_uploads.id_user = users.id WHERE folder_uploads.id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == $row100['username']){
                                header('Location:lessons.php?remove-video='. $value);

                              }
                              else {
                                header('Location:lessons.php');
                              }}

                              }
                                echo '</div>';
  echo '</div>';   
  }
 echo '<div class = "folder" style = "position: relative;border: none; background: none; cursor:pointer" data-toggle="modal" data-target="#exampleModalCenter">
  <img src = "img/plus.png" class = "add-folder"/>
  </div>';
  echo '
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Shto Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="post" action="#">
      <div class="modal-body">
          <input type = "text" name = "emri" id = "name"  autofocus placeholder = "Shkruani emrin e videos" oninvalid="Invalidfolder(this);" oninput="Invalidname(this);" required>
          <br><br>
          <input type = "text" name = "linku" id = "link"  autofocus placeholder = "Shkruani linkun e youtubes" oninvalid="Invalidfolder(this);" oninput="Invalidlink(this);" required>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll</button>
        <button type="submit" name = "upload-video" class="btn btn-primary">Ruaj</button>
     
      </div>
       </form>
    </div>
  </div>
</div>';
}
else {
  if (/*(($_SESSION['username']) == "ilirperolli") || */(($_SESSION['username']) == "arianitjaka") || (($_SESSION['username']) == "K") || (($_SESSION['username']) == "nitaqerkezi") ) {
        
    
  echo ' <div class = "folder">
  <a href = "kursori_selection.php"> <img src = "https://pbs.twimg.com/profile_images/902514399113613312/ERiSmvg8_400x400.jpg" class = "folder-photo" style = "width:300px;" id = "kursori-img"/></a>
  <div class = "folder-name">
  <a href="kursori_selection.php" > Kursori </a>
  </div>
  </div>';
}

   $querycheck = "SELECT users.Name, users.Surname, users.username, folders.id, folders.photo,folders.folder_name,folders.date,folders.time FROM folders inner join users on folders.id_user = users.id order by id asc";
      $results = mysqli_query($db, $querycheck);
      while(($row = $results->fetch_assoc()) !== null){ 
 echo '<div class = "folder">';
 echo' <a href = "?folder='.$row['id'].'"> <img src = "'.$row['photo'].'" class = "folder-photo" style = "width:200px;"/></a>';
 echo'<div class = "folder-name">';
  echo '<a href="?folder='.$row['id'].'" title="'.$row['folder_name'].'">';
  if (strlen($row['folder_name']) > 37){
                
                $name = $row['folder_name'];
                $name = substr($name, 0, 37);
                $name = $name . " ...";
              
               echo' <h5>'.$name.'</h5>';
               }
               else {
                echo '<h5> '.$row['folder_name'].'<h5>';
               }


  echo'</a>';

 echo '<button type="button" title = "Info" class="btn btn-light" data-toggle="modal" data-target="#modal_'.$row['id'].'">
  <img src= "user-files-logos/more.png" style = "width:20px;" id = "more-info"/>
</button>';
//Modal Fade
               echo '<div class="modal fade" id="modal_'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
              echo '<div class="modal-dialog modal-dialog-centered" role="document">';
echo '<div class="modal-content">';
      echo '<div class="modal-header">';
echo '<h5 class="modal-title" id="exampleModalCenterTitle">Rreth Folderit</h5>';
        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
          echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
      echo '</div>';
      echo '<div class="modal-body" style = "text-align:left">';
        echo 'Emri i folderit: ' . $row['folder_name'];
        echo '<br>';
        echo 'Ngarkuesi: ' . $row['Name']." ". $row['Surname'];
         echo '<br>';
        echo 'Data: ' . $row['date'];
        echo '<br>';
        echo 'Ora: ' . $row['time'];
      echo '</div>';
      




      echo '<div class="modal-footer">';
      echo '<form action="#" method="post" id = "folder-form">';
       echo ' <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll </button>';
        

        if (($_SESSION['username']) == $row['username']){

        echo '<button type="submit" name="delete-folder" class="btn btn-danger" id = "delete-button" value="'. $row['id'].'">Fshij</button>';
       
      }
         echo '</form>';
              echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    //

 if (isset($_POST['delete-folder'])){
                                  $value = $_POST['delete-folder'];
  $query100 = "SELECT users.username FROM folders inner join users on folders.id_user = users.id WHERE folders.id='$value'";
                                    $results100 = mysqli_query($db, $query100);
                                       while(($row100 = $results100->fetch_assoc()) !== null){    
                                
           
            
            if ($_SESSION['username'] == $row100['username']){
                                header('Location:lessons.php?remove-folder='. $value);

                              }
                              else {
                                header('Location:lessons.php');
                              }}

                              }
  echo '</div>';
  echo '</div>';  
 }
 echo '    <div class = "folder" style = "position: relative;border: none; background: none; cursor:pointer" data-toggle="modal" data-target="#exampleModalCenter">
  <img src = "img/plus.png" class = "add-folder"/>
  </div>';
  echo '
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Shto folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="post" action="#">
      <div class="modal-body">
         
          <input type = "text" name = "folder" id = "folder"  autofocus placeholder = "Shkruani emrin e folderit" oninvalid="Invalidfolder(this);" oninput="Invalidfolder(this);" required>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll</button>
        <button type="submit" name = "upload-folder" class="btn btn-primary">Ruaj</button>
     
      </div>
       </form>
    </div>
  </div>
</div>';
}

 ?>

 




 
</div>
</div>
<br><br>

</body>
</html>
