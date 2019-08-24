<?php include('server.php');
    $error = "";

    // Shiko nese jane kyqur, nese po ridirektoje ne index
   if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
     $error = "success";
     header('Location: index.php');
     exit();
   }
 ?>
<html>
<head>
  
 <link rel="icon" type="image/png" href="people.png" />

  <meta name="theme-color" content="#2f476d">
<meta name="msapplication-navbutton-color" content="#2f476d">
<link rel = "stylesheet" type = "text/css" href="account-stili.css">
<meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

   <title>Regjistrohu - amici llogaria</title>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>
 <body>

   <div class = "titulli"><span style = "color:black"> amici  </span><span style = "  color:#9E9E9E;" >regjistrimi </span></div>

   <div class = "contact-form">
   <form action="#" method="POST">
   
     
     <!-- <img src = "img/avatar.jpg" class = "avatar"/><br><br> -->
<img src = "img/logo.jpg" class = "avatar"/><br><br>
    <h2>Krijo Llogarine</h2>



         <p id = "emri">Emri</p>
    <input name="emri" autofocus value ="<?php if(isset($_POST['emri'])){echo $_POST['emri'];}?>" type="text" placeholder = "Shkruani Emrin" oninvalid="this.setCustomValidity('Ju lutem shkruani emrin'); document.getElementById('emri').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('emri').style.color='black'" required />
    <p id = "mbiemri">Mbiemri</p>
    <input name="mbiemri" autofocus value ="<?php if(isset($_POST['mbiemri'])){echo $_POST['mbiemri'];}?>" type="text" placeholder = "Shkruani Mbiemrin" oninvalid="this.setCustomValidity('Ju lutem shkruani mbiemrin'); document.getElementById('mbiemri').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('mbiemri').style.color='black'" required />
  <p id = "mosha">Mosha</p>
  <input name="mosha" value ="<?php if(isset($_POST['mosha'])){echo $_POST['mosha'];}?>" type="number" placeholder = "Shkruani moshen" min = "17" max="65" oninvalid="this.setCustomValidity('Ju lutem shkruani moshen'); document.getElementById('mosha').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('mosha').style.color='black'" required/>
      <p>Gjinia: </p>
  <select name="gender">
    <option value="-1">Zgjedh</option>
  <option value="0" <?php if (isset($_POST['gender']) AND $_POST['gender'] == '0') {
    echo ' selected="selected"';
  } ?>>Femer</option>
  <option value="1" <?php if (isset($_POST['gender']) AND $_POST['gender'] == '1') {
    echo ' selected="selected"';
  } ?>>Mashkull</option>
  </select>
      <p id = "viti">Viti Akademik</p>
    <select name="viti">
    <option value="-1">Zgjedh</option>
    <option value="1" <?php if (isset($_POST['viti']) AND $_POST['viti'] == '1') {
    echo ' selected="selected"';
  } ?>>Viti 1</option>
  <option value="2" <?php if (isset($_POST['viti']) AND $_POST['viti'] == '2') {
    echo ' selected="selected"';
  } ?>>Viti 2</option>
  <option value="3" <?php if (isset($_POST['viti']) AND $_POST['viti'] == '3') {
    echo ' selected="selected"';
  } ?>>Viti 3</option>
  </select>
    <p id = "emaili">Emaili </p> 
  <input name="email" value ="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" type="email" placeholder = "Shkruani emailin" oninvalid="this.setCustomValidity('Ju lutem shkruani emailin'); document.getElementById('emaili').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('emaili').style.color='black'" required/>
<span style = "font-size: 12px; color:#575757; margin-top: -20px !important; margin-bottom: 5px; display: inline-block;"> *Emaili duhet te jete i sakte qe t'iu vie verifikimi perndryshe nuk aktivizohet llogaria </span>
       <p id = "perdoruesi">Perdoruesi</p>
  <input name="username" value ="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" type="text" placeholder = "Shkruani Usernamin" oninvalid="this.setCustomValidity('Ju lutem shkruani perdoruesin'); document.getElementById('perdoruesi').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('perdoruesi').style.color='black'" required/>
  <p id = "fjalekalimi">Fjalekalimi</p>
  <input name="password_1" id = "password"  value ="<?php if(isset($_POST['password_1'])){echo $_POST['password_1'];}?>" type="password" placeholder = "Shkruani Fjalekalimin" oninvalid="this.setCustomValidity('Ju lutem shkruani fjalekalimin'); document.getElementById('fjalekalimi').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('fjalekalimi').style.color='black'" required  />
  <p id = "fjalekalimi1">Rishkruaj Fjalekalimin</p>
  <input name="password_2" id = "password"  value ="<?php if(isset($_POST['password_2'])){echo $_POST['password_2'];}?>" type="password" placeholder = "Shkruani Fjalekalimin"  oninvalid="this.setCustomValidity('Ju lutem rishkruani fjalekalimin'); document.getElementById('fjalekalimi1').style.color='#FA3B4B'"
    oninput="this.setCustomValidity(''); document.getElementById('fjalekalimi1').style.color='black'" required/>
   <div class="g-recaptcha" data-sitekey="6LcyX4QUAAAAAPXKMM4rbtUPXZi1fWNPdshj1-rA"></div>

      <input type="submit" name="reg_user" value="Dergo">
      <div class = "account">
       Keni llogari? <a href= "login.php">Ky&ccedil;u</a>
      </div>
     <?php include('errors.php'); ?>
     </form>
</div>

<br><br>
   </body>
   </html>
