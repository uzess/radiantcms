<?php

function sendEmail($to, $subject, $msg, $from = "", $replyemail) {
   


    $headers = "From: " . strip_tags($replyemail) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($replyemail) . "\r\n";
  //  $headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (mail($to, $subject, $msg, $headers))
        return true;
    else
        return false;
}

?>