<?php
// Pear Mail Library
require_once "./Mail/Mail.php";

$from = '<lerm201092@gmail.com>';
$to = '<lerm201092@gmail.com>';
$subject = 'TEST MAIL';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://mail.distritec.com.co',
        'port' => '465',
        'auth' => true,
        'username' => 'dcomercial@distritec.com.co',
        'password' => 'x^f{&Bi{&P#]'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}?>