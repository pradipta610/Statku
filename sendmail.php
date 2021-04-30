<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php'; 

$mail = new PHPMailer(true);

$alert=''; 
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $abstrak =$_POST['abstrak'];
    $metodologi =$_POST['metodologi'];
    // $file =;

    try{
        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username ='amokkolok123@gmail.com';
        $mail->Password ='Pradipta123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port ='587';

        $mail->setFrom('amokkolok123@gmail.com');
        $mail->addAddress('amokkolok123@gmail.com');

        $mail->isHTML(true);
        $mail->Subject ='Message Received from StatPal Website(Contact Page)';
        $mail->Body ="<p>Nama: $name <br> <p>Email: $email <br> <p>Abstrak: $abstrak <br> <p>Metodologi: $metodologi";
        $mail ->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        $mail->send();
        $alert = '<div class="alert-success show" id="show">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Message Sent!  Thank you for contacting us.</span>
        <span class="close-btn">
          <span class="fas fa-times">
        </span>
        </span>
      </div>';
    }catch(Exception $e){
         $alert ='<div class="alert-error show" id="show">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">'.$e->getMessage().'</span>
         <span class="close-btn">
           <span class="fas fa-times">
         </span>
         </span>
       </div>';
    }
}



?>