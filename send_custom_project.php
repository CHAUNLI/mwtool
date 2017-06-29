<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message=$_POST["message"];
$cus_length=$_POST["customl"];
$cus_width=$_POST["customw"];
$cus_height=$_POST["customh"];
$cus_material=$_POST["custom_material"];
$cus_gs=$_POST["custom_gs"];
$cus_lock=$_POST["custom_lock"];

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

$Body .= "<h5>length:</h5> ";
$Body .= $cus_length;
$Body .= "\n";
$Body .= "<h5>width:</h5> ";
$Body .= $cus_width;
$Body .= "\n";
$Body .= "<h5>height:</h5> ";
$Body .= $cus_height;
$Body .= "\n";
$Body .= "<h5>material:</h5> ";
$Body .= $cus_material;
$Body .= "\n";
$Body .= "<h5>gas structs:</h5> ";
$Body .= $cus_gs;
$Body .= "\n";
$Body .= "<h5>lock:</h5> ";
$Body .= $cus_lock;
$Body .= "\n";

$Body .= '</body></html>';

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);
$success = mail($email, "success message", "your order information".$Body, $headers);

// redirect to success page
if ($success){
    echo "success";
}else{
    echo  "fail";
}

?>