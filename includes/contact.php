<?php include 'header2.php' ?>
<?php include 'db.php' ?>

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $email = $_POST['email'];
    $number= $_POST['number'];
     $message = $_POST['message'];
    if($name == '' || $email == '' || $number == '' || $message == ''){
        echo "Please make sure you fill all inputs";
    } 
    $mailto = "asirificharles@yahoo.com";
    $headers = "From: " . $email;
    $text = "<p>You have recieved an message from </p><br>" . '<br>' . $name . ' ' . '<br>' . $email . ' ' . $number . '<br>' . $message;
  $query = "INSERT into contactus(name,email,number,message) VALUES('$name','$email','$number', '$message')";
    $result = mysqli_query($con, $query);
    
     require 'autoload.php';
     require 'Exception.php';
     require 'PHPMailer.php';
     require 'SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML(true);
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
$mail->addAttachment('logo1.jpg');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo 'Message Sent';
    header("Location:contactus.php?mailsent");
}
}
?>
