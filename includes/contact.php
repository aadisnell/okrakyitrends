<?php include 'db.php' ?>

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $email = $_POST['email'];
    $number= $_POST['number'];
     $message = $_POST['message'];
    $mailto = "asirificharles@yahoo.com";
    $headers = "From: " . $email;
    $text = "You have recieved an e-mail from ".$name. '' . $email . '' .$number. ".\n\n". $message;

 require 'autoload.php';
require 'Exception.php';
 require 'PHPMailer.php';
 require 'SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ascharles23@gmail.com';                 // SMTP username
$mail->Password = '@snELL0541;';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
//Create a new PHPMailer instance

//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set who the message is to be sent to
$mail->addAddress('asirificharles@yahoo.com');
//Set the subject line
$mail->Body =$text;
$mail->Subject = 'Enquiry';
//Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    header("Location:contactus.php?mailsent");
}
}
?>
