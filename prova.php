 <?php
    $from='From: Mail Contact Form <b8_22980538>';
    $to='ilir_perolli@live.com';
    $subject='PHP mail() Test';
    $body='This is a test message sent with the PHP mail function!';
    if(mail($to,$subject,$body,$from)){
        echo 'E-mail message sent!';
    } else {
        echo 'E-mail delivery failure!';
    }
 ?>