<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $emailfrom= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
}

$mailTo = "shardulgawande27@gmail.com";
$headers = "From: ".$mailfrom;
$txt = "You have recievded an email from".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact1.html?mailsend");
?>
