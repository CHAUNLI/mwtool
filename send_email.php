<?php



    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $postcode =$_POST["postcode"];
    $message=$_POST["message"];

    $EmailTo = "lambert.lichuan@gmail.com";
    $EmailToMw = "mwcp@toolboxcentre.com.au";
$EmailToGC = "goldcoast@toolboxcentre.com.au";
$EmailToV = "mwqld@toolboxcentre.com.au";
$EmailToDerek = "derekwu@toolboxcentre.com.au";
    $Subject = "New Message Received";
// prepare email body text

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $Body='
<html>
   <body>
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
<td style="width: 623px; height: 355px;">
<p><span style="font-size: 12pt;"><strong>Hi,'.$name.'</strong></span></p>
<p><span style="font-size: 12pt;"><strong>Thanks for your message. We will get you back shortly!</strong></span></p>

<p><span style="font-size: 12pt;">Your Quote Detail:</span></p>
<table height="183" style="width: 474px;">
<tbody>
<tr>
<td style="width: 102px;"><span style="font-size: 12pt;">Name</span></td>
<td style="width: 322px;"><span style="font-size: 12pt;">'.$name.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 12pt;">Email</span></td>
<td style="width: 322px;"><span style="font-size: 12pt;">'.$email.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 12pt;">Phone</span></td>
<td style="width: 322px;"><span style="font-size: 12pt;">'.$phone.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 12pt;">Postcode</span></td>
<td style="width: 322px;"><span style="font-size: 12pt;">'.$postcode.'</span></td>
</tr>
<tr>
<td style="width: 102px;"><span style="font-size: 12pt;">Message</span></td>
<td style="width: 322px;"><span style="font-size: 12pt;">'.$message.'</span></td>
</tr>
</tbody>
</table>

<p><strong><span style="font-size: 12pt; color: #008000;">Your MW Toolbox Team</span></strong></p>
<p><span style="font-size: 8pt;">Coopers Plains</span></p>
<p><span style="font-size: 8pt;">Phone: 07 3875 1066</span></p>
<p><span style="font-size: 8pt;">Email: mwcp@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 754 Beaudesert Road, Coopers Plains, QLD 4108</span></p>
<p><span style="font-size: 8pt;">Albion</span></p>
<p><span style="font-size: 8pt;">Phone: 07 3262 4577</span></p>
<p><span style="font-size: 8pt;">Email: mwqld@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 174 Sandgate Road, Albion, QLD 4010</span></p>
<p><span style="font-size: 8pt;">Virginia</span></p>
<p><span style="font-size: 8pt;">Phone: 07 3865 3300</span></p>
<p><span style="font-size: 8pt;">Email: virginia@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 2/2023 Sandgate Road, Virginia, QLD, 4014</span></p>
<p><span style="font-size: 8pt;">Gold Coast</span></p>
<p><span style="font-size: 8pt;">Phone: 07 5537 7004</span></p>
<p><span style="font-size: 8pt;">Email: goldcoast@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 223 Brisbane Road, Labrador, QLD 4215</span></p>
<p><span style="font-size: 8pt;">Townsville</span></p>
<p><span style="font-size: 8pt;">Phone: 07 4725 5280</span></p>
<p><span style="font-size: 8pt;">Email: townsville@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 1/298 Bayswater Road, Garbutt, QLD 4814</span></p>
<p><span style="font-size: 8pt;">Rockhampton</span></p>
<p><span style="font-size: 8pt;">Phone: 07 4928 1977</span></p>
<p><span style="font-size: 8pt;">Email: rockhampton@toolboxcentre.com.au</span></p>
<p><span style="font-size: 8pt;">Address: 397 Yaamba Road, Park Avenue, QLD 4701</span></p>
</td>
</tr>
</tbody>
</table>
<table style="background-color: #008000; width: 546px;" height="49">
<tbody>
<tr>
<td style="width: 524px;"></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>';


    //$message_to_customer='<p><span style="color: black;"><strong><span style="font-size: 18pt;">We would contact you shortly</span></strong></span></p>';
  /*  $Body = '<html><body>';
    $Body .= '<h4 class="section-title default-color">MW TOOOLBOX CLIENTS</h4>';


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

    $Body .= '</body></html>';*/

    $success = mail($EmailTo, $Subject, $Body, $headers);
    $success = mail($EmailToV, $Subject, $Body, $headers);
    $success = mail($EmailToDerek, $Subject, $Body, $headers);
    $success = mail($email, "MW toolbox", $Body, $headers);

// send email


// redirect to success page
$servername = "localhost";
$username = "mwtoolbo_admin1";
$password = "123123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

    if ($success) {

        echo "success";
    } else {
        echo "fail";
    }


?>