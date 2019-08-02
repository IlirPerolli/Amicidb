<?php
   $db = mysqli_connect('localhost', 'root', '', 'registration');
if (!$db) {
    die('Nuk mund te lidhet me serverin MySQL: ' . mysql_error());
}
?>