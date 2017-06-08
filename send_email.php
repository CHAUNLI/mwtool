<?php
$name = $_POST["name"];
$email = $_POST["email"];

$EmailTo = "lambert.lichuan@gmail.com";
$Subject = "New Message Received";
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";



// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo  "fail";
}

?>