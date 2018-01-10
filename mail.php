<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lemontsu1205@gmail.com';
    $mail->Password = 'applejam';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('lemontsu1205@gmail.com', 'JiaYuan Liu');
    $mail->addAddress('x76945@gmail.com', 'NaNa');
    $mail->addAddress('lemontsu1205@gmail.com','JiaYuan');
//    $mail->addReplyTo('noreply@example.com', 'noreply');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/backup/myfile.tar.gz');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail Subject!';
    $mail->Body    = date("h:i:sa").'User login';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}