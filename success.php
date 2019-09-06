<?php
    // Starto sesionin
    ob_start();
    session_start();


    if (!isset($_SESSION['hapja']) || $_SESSION['hapja'] == false) {
     header("Location: login.php");
    }
    else {
    header('Refresh: 120; URL=main.php');
    $_SESSION['hapja'] = false;
    }
?>
<html>
<head>
  <title> Llogaria amici </title>
 <link rel="icon" type="image/png" href="people.png" />
  <meta name="theme-color" content="#2f476d">
  <link rel = "stylesheet" href="plugins/aos/aos.css">
  <meta name="msapplication-navbutton-color" content="#2f476d">
  <meta name="apple-mobile-web-app-status-bar-style" content="#2f476d">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <style>
  @font-face {
    font-family: 'SamsungSharpSans-Bold';
    src: url('converted-files/SamsungSharpSans-Bold.eot');
    src: url('converted-files/SamsungSharpSans-Bold.woff2') format('woff2'),
         url('converted-files/SamsungSharpSans-Bold.woff') format('woff'),
         url('converted-files/SamsungSharpSans-Bold.ttf') format('truetype'),
         url('converted-files/SamsungSharpSans-Bold.svg#SamsungSharpSans-Bold') format('svg'),
         url('converted-files/SamsungSharpSans-Bold.eot?#iefix') format('embedded-opentype');
    font-weight: normal;
    font-style: normal;
  }
  body{
    background: #F3F5F8;
  }
    @media screen and (max-width:1300px){
      .foto{
        width:100% !important;
          margin-left: 0px !important;
      }
      .permbledhje{
        margin-top: 50px !important;
      }
      .main{
        margin-top:30px !important;
      }
    }
  @media screen and (max-width:640px){
    .permbledhje{
      width:100% !important;
      margin-right: 0px !important;
      margin-top:50px !important;

    }
    .main{
      margin-top:30px !important;
    }
    .butoni{
      width: 98% !important;
      padding: 0 !important;
      margin:0 !important;
    }
    .foto{
      width: 100% !important;
      margin-left: 0px !important;
    }
    .foto img{
      width: 100% !important;
    }
  }
  .permbledhje{
    width:400px;
    display: inline-block;
    margin-right: 30px;

  }
  .permbledhje h2{
    font-family: 'SamsungSharpSans-Bold';
    font-size: 65px;
    font-weight: 100;
    margin-bottom: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
    word-break: keep-all;
     color: #333333;
    text-align: center;
      word-break: break-word !important;
  }
  .permbledhje h3{
    font-family: 'SamsungSharpSans-Bold';
    font-size: 35px;
    font-weight: 100;
    margin-bottom: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
    word-break: keep-all;
     color: #333333;
    text-align: center;
      word-break: break-word !important;
  }
  .foto{
    display: inline-block;
    margin-left: 30px;

  }
  .foto img{
    width:400px;
    display: inline-block;
  }
  .butoni {

      width: 200px;
  border:2px solid #333333;
      z-index: 1;
      overflow-x: hidden;
  margin:auto;
  border-radius: 5px;
  display: inline-block;

  }
  .butoni:hover{
    background: #e9e9e9;
  }

  .butoni a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #333333;
      display: block;
    font-family: 'SamsungSharpSans-Bold';
      font-weight: 100;
      margin:0;
      text-align:center;
  }
  </style>
</head>
<body>
   <div class = "main" style = "text-align:center; margin-top:25vh;">
      <div class = "foto">
        <img src = "https://dweb.si/wp-content/uploads/2018/07/rocket.gif?fbclid=IwAR0PapVRZy0IxYGA4Nry8jH6UH98VRE8tuZpMuC0tGv69ukeAySMQ6Jqaek"/>
      </div>
      <div class = "permbledhje">
        <h2> Urime! </h2>
        <h3> Ju krijuat nje amici llogari.</h3>
        <br>
        <h3 style="font-size:16px"><i>*Do ju njoftojme permes emaili-t kur te behet llogaria aktive.</i><h3>
        <br>
      </div>
    
      <br><br><br><br>
      <div class="butoni">
        <a href="main.php">Kryefaqja</a>
      </div>
</div>
</body>
</html>
