<?php
$title_name=$_POST["custom_title"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$postcode=$_POST["postcode"];
$message=$_POST["message"];
$cus_length=$_POST["customl"];
$cus_length2=$_POST["customl2"];
$cus_width=$_POST["customw"];
$cus_width2=$_POST["customw2"];
$cus_widthr=$_POST["customwr"];
$cus_height=$_POST["customh"];
$cus_height2=$_POST["customh2"];
$cus_material=$_POST["custom_material"];
$cus_gs=$_POST["custom_gs"];
$cus_lock=$_POST["custom_lock"];
$cus_thick=$_POST["thickness"];

$EmailTo = "lambert.lichuan@gmail.com";
$EmailToMw = "mwcp@toolboxcentre.com.au";
$Subject = "New Message Received";
// prepare email body text

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$Body ='<html><body>
<div class="main"></div>
<div class="main">
<table style="background-color: #008000; width: 546px;" height="75">
<tbody>
<tr style="height: 13px;">
<td style="width: 518px; text-align: center; height: 13px;"><span style="color: #ffffff; font-size: 18pt;"><strong>MW Toolbox &amp; Trailer Centre</strong></span></td>
</tr>
</tbody>
</table>
<table style="width: 546px;">
<tbody>
<tr style="height: 355px;">
<td style="width: 526px; height: 355px;">
<p><span style="font-size: 12pt;"><strong>Hi,'.$name.'</strong></span></p>
<p><span style="font-size: 12pt;"><strong>Thanks for your message. We will get you back shortly!</strong></span></p>
<p><span style="font-size: 12pt;"><strong></strong></span></p>
<p><span style="font-size: 12pt;"><strong></strong></span></p>
<p><span style="font-size: 12pt;">Your Quote Detail:</span></p>
<table height="183" style="width: 474px;">
<tbody>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Product</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$title_name.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Name</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$name.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Email</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$email.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Phone</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$phone.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Postcode</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$postcode.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Message</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$message.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Length</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_length.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Width</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_width.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Height</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_height.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Length 2</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_length2.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Width 2</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_width2.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Height 2</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_height2.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">R</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_widthr.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Material</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_material.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Gas struts</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_gs.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Lock</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_lock.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 14pt;">Thickness</span></td>
<td style="width: 322px;"><span style="font-size: 14pt;">'.$cus_thick.'</span></td>
</tr>
</tbody>
</table>
<p></p>
<p></p>
<p></p>
<p><strong><span style="font-size: 12pt; color: #008000;">Your MW toolbox Team</span></strong></p>
<p><span style="font-size: 8pt;">Phone: +61 7 38751066</span></p>
<p><span style="font-size: 8pt;">Email: mwcp@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 754 Beaudesert Road, Coopers Plains, QLD 4108</span></p>
</td>
</tr>
</tbody>
</table>
<table style="background-color: #008000; width: 548px;" height="49">
<tbody>
<tr>
<td style="width: 524px;"></td>
</tr>
</tbody>
</table>
</div>
</body></html>';


/*$Body = '<html><body>';
$Body .= '<h4>MW TOOOLBOX CLIENTS</h4>';


$Body .= "<h5>Product Name:</h5> ";
$Body .= $title_name;
$Body .= "\n";


$Body .= "<h5>Name:</h5> ";
$Body .= $name;
$Body .= "\n";

$Body .= "<h5>Email:</h5> ";
$Body .= $email;
$Body .= "\n";

$Body .= "<h5>Phone:</h5> ";
$Body .= $phone;
$Body .= "\n";

$Body .= "<h5>Postcode:</h5> ";
$Body .= $postcode;
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

$Body .= '</body></html>';*/

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);
$success = mail($EmailToMw, $Subject, $Body, $headers);
$success = mail($email, "MW toolbox", $Body, $headers);

// redirect to success page
if ($success){
    echo "success";
}else{
    echo  "fail";
}

?>