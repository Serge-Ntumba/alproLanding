<?php


if(isset($_POST["Name"]) && $_POST["Name"] != ""){
    // form submit

$userName = $_POST ['Name'];
$userPhone = $_POST ['Phone'];
$message = $_POST ['message'];

$to = "s7ntumba@gmail.com";

$body = "";

$body.="From: ".$userName."\r\n";
$body.="Tel: ".$userPhone."\r\n";
$body.="Message: ".$message."\r\n";

mail($to, $body);
}

?>