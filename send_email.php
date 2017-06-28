<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message=$_POST["message"];

$EmailTo = "lambert.lichuan@gmail.com";
$Subject = "New Message Received";
// prepare email body text

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$Body = '<html><body>';
$Body .= '<h4>MW TOOOLBOX CLIENTS</h4>';





$Body .= "<h5>Name:</h5> ";
$Body .= $name;
$Body .= "\n";

$Body .= "<h5>Email:</h5> ";
$Body .= $email;
$Body .= "\n";

$Body .= "<h5>Phone:</h5> ";
$Body .= $phone;
$Body .= "\n";

$Body .= "<h5>Message:</h5> ";
$Body .= $message;
$Body .= "\n";

$Body .= '</body></html>';

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);
$success = mail($email, "success message", "we would contact you quickly", $headers);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo  "fail";
}

?>