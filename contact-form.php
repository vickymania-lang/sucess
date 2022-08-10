<?php
if(isset($_POST['submit'])){


// LIST EMAIL ADDRESS
$recipient = "ogungbuyivictor@gmail.com";

// SUBJECT (Subscribe/Remove)
$subject = "no reply ";

//FORM VALUES

// SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
// DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "Info@Blabla.Com";

// MAIL BODY
$body .= "name: ".$_POST['name']." \n";
$body .= "email: ".$_POST['email']." \n";
$body .= "message: ".$_POST['message']." \n";

// SEND MESSGAE

mail($ogungbuyivictor@gmail.com, $subject, $body); or die ("Mail could not be sent.");

// SHOW RESULT PAGE

$msg = 'THANK YOU'
}
?>