<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$aux = mail("turoar2006@gmail.com","My subject",$msg);
echo $aux."\n";
?>