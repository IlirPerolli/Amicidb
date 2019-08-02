<?php
// lidhu me databaze
include("config.php");
     $username = $_SESSION['username'];
$query= "SELECT * FROM users WHERE username = '$username'";
      $results = mysqli_query($db, $query);
          $row = $results->fetch_assoc();
          $_SESSION['notification'] = $row['notification'];
          $_SESSION['notification_uploads'] = $row['notification_uploads'];

          
		if ( $_SESSION['vitiakademik'] == "1") {
      echo '<style>#librat-viti2 { display:none;}</style>';
      echo '<style>#librat-viti3 { display:none;}</style>';
      echo '<style>#librat-viti3br { display:none;}</style>';
      echo '<style>#librat-viti2br { display:none;}</style>';
      echo '<style>#d-viti2 { display:none;}</style>';
      echo '<style>#d-viti2br { display:none;}</style>';
      echo '<style>#d-viti3 { display:none;}</style>';
      echo '<style>#d-viti3br { display:none;}</style>';
    }
      else if ( $_SESSION['vitiakademik'] == "2" ) {
      echo '<style>#librat-viti3br { display:none;}</style>';
      echo '<style>#librat-viti3 { display:none;}</style>';
      echo '<style>#d-viti1 { display:none;}</style>';
      echo '<style>#d-viti1br { display:none;}</style>';
      echo '<style>#d-viti3br { display:none;}</style>';
      echo '<style>#d-viti3 { display:none;}</style>';
    }
      else if ( $_SESSION['vitiakademik'] == "3" ) {

      echo '<style>#d-viti1 { display:none;}</style>';
      echo '<style>#d-viti1br { display:none;}</style>';
      echo '<style>#d-viti2br { display:none;}</style>';
      echo '<style>#d-viti2 { display:none;}</style>';
    }
    if ( $_SESSION['notification'] == "0") {
      echo '<style>#notification-counter{ display:none !important;}</style>';

    }
    if ($_SESSION['notification_uploads'] == "0"){
echo '<style>#notification-counter-uploads{ display:none !important;}</style>';
    }

?>