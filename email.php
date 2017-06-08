<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 8/06/2017
 * Time: 2:50 PM
 */
if(isset($_POST['submit']))
{
    // if you dont want to send empty email.
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
    {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $header = "From: SiteDemo";
        $to = 'lambert.lichuan@gmail.com';
        $subject = 'Hello';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        mail($to,$subject,$body,$header);
    }
}