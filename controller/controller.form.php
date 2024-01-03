<?php
require 'sender.php';
if (isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']) {
    $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
}
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'none';
switch ($mode) {
    case 'contact':
        $fields = array('ppi_captcha','input_captcha','email','name','country','cp','zip','messages','company');
        foreach ( $fields as $field ) {
            if(!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                echo 'Please fill up all required field';
                die();
    }
    
    ${$field} = htmlentities($_POST[$field]);
}
if ($ppi_captcha !== $input_captcha) {
    echo "Uh oh, captcha was incorrect!";
    die();
}
if ($email == "") {
    echo "Email required!";
    die();
}
if ($name == ""){
    echo "Name required";
    die();
}
require "template/contact.php";

$mail->Subject = 'Contact Form';
$mail->AddAddress("didingbeauty@gmail.com");
// $mail->FromName = 'No Reply';
$mail->Body = $htmlMessage;

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    die();
}

echo "Action Complete";
die();

break;

case 'email':
    $news = array('footemail');
    foreach ( $news as $newsfield ) {
        if(!isset($_POST[$newsfield]) || empty(trim($_POST[$newsfield]))) {
            echo 'Please fill Email';
            die();
}

${$newsfield} = htmlentities($_POST[$newsfield]);
}

if ($footemail == "") {
echo "Email required!";
die();
}


require "template/newsletter.php";

$mail->Subject = 'Newsletter';

$mail->AddAddress("didingbeauty@gmail.com");
$mail->AddAddress($footemail);
$mail->Body = $htmlMessage;

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
die();
}

echo "Email Sent";
die();

break;
}
?>
