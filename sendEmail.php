<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host        = 'smtp.gmail.com';
  $mail->CharSet = PHPMailer::CHARSET_UTF8;
  $mail->SMTPAuth    = true;
  $mail->SMTPKeepAlive = true;
  $mail->SMTPSecure = "tls"; 
  $mail->Mailer = 'smtp';
  $mail->Username    = 'sender@gmail.com';
  $mail->Password    = 'password';
  $mail->SMTPSecure  = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port        = 587;
  
  $mail->setFrom('sender@gmail.com', 'sender');
  $mail->addAddress('receiver@gmail.com', 'receiver');
  $mail->isHTML(true);
  $mail->Subject     = 'test subject';
  $mail->Body        = 'test content';
  $mail->send();
  echo 'Message has been sent';
?>