<?php

/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 10/05/2017
 * Time: 2:37 PM
 */
if((isset($_POST['call-name']))&&(isset($_POST['email'])&&$_POST['email']!="")){
    $to = 'lambert.lichuan@gmail.com';
    $subject = 'Callback';

    $message = '
        <html>
            <head>
                <title>Call me back</title>
            </head>
            <body>
                <p><b>Name:</b> '.$_POST['call-name'].'</p>
                <p><b>Phonenum:</b> '.$_POST['email'].'</p>                        
            </body>
        </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Site <lambert.lichuan@gmail.com>\r\n";
    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}