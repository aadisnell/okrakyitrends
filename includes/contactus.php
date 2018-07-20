<?php include 'db.php' ?>

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nameEr = $emailEr = $numberEr = $messageEr = '';
$isError = false;
$response = '';
$name = $email = $number = $message = '';
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameEr = 'Name field is empty';
    }else{
         $name = $_POST['name'];
    }
     if(empty($_POST['email'])){
        $emailEr = 'Email field is empty';
    }else{
         $email = $_POST['email'];
    }
     if(empty($_POST['number'])){
        $numberEr = 'Phone Number field is empty';
    }else{
         $number = $_POST['number'];
    }
     if(empty($_POST['message'])){
        $messageEr = 'Message field is empty';
    }else{
         $message = $_POST['message'];
     }
    
   if (!empty($name) && !empty($email) && !empty($number) && !empty($message)) {
   
    $mailto = "asirificharles@yahoo.com";
    $headers = "From: " . $email;
    $text = "You have recieved an message from " . $name . ' ' . $email . ' ' . $number . ".\n\n". $message;
   $query = "INSERT into contactus(name,email,number,message) VALUES('$name','$email','$number', '$message')";
    $result = mysqli_query($con, $query);
    
     require 'autoload.php';
     require 'Exception.php';
     require 'PHPMailer.php';
     require 'SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Username = 'ascharles23@gmail.com';          
$mail->Password = '@snELL0541;';                       
$mail->SMTPSecure = 'tls';                
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
//if (!$mail->send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
//} else {
//    echo 'Message Sent';
//    header("Location:contactus.php?mailsent");
//}
       $response = $mail->send();
       header("Location: contactus.php?mailsent"); // redirect back to your contact form
       exit;
}
}
?>

            <style>

                nav{
                    background-color:rgba(238,130,238,0.5);
                    
                }
     
        </style>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="../index.php"><img src="../pic/logo.png" style="width:70px;" alt="Okrakyi-logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="col">
           <li>
              <a  class="nav-link" href="../index.php">Home
              
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us
               </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Our Designs
               <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactus.php">Contact Us
              <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<style>
.jumbotron{
    background-image: url('../pic/contactus.png'); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: 75px;
    min-height: 400px;
}
    @media only screen and (max-width:400px){
    .jumbotron{
    background-image: url('../pic/smallcontactus.png');
    margin-top: 75px;
    min-height: 400px;
    }
}

</style>
<div class="jumbotron">

</div>
<div class="container">
    <div class="row">
        <div class="col-md-7">
    
        <?php
        if (!empty($response)) {
            ?>
            <div class="alert alert-info">
                <?php echo $response ?>
            </div>
            <?php
        }
        ?>

            <form class="form-group" id="main" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Name</span>
                    </div>
                    <input value="<?php if(!$isError){echo htmlspecialchars($name);} else{echo '';}?>" type="text" class="form-control" placeholder="Name" name="name" id="name">
                    <span style="color: #FF0000"><?php if (!empty($nameEr)) {echo $nameEr ;} ?></span>

                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">@</span>
                    </div>
                    <input value="<?php if(!$isError){echo htmlspecialchars($email);} else{echo '';}?>" type="email" id="email" class="form-control" placeholder="Email Address" name="email">
                    <span style="color: #FF0000"><?php if (!empty($emailEr)) {echo $emailEr;} ?></span>
                </div>
                
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Phone No.</span>
                    </div>
                    <input value="<?php if(!$isError){echo htmlspecialchars($email);} else{echo '';}?>" type="text" class="form-control" placeholder="Phone No." id="number" name="number">
                    <span style="color: #FF0000"><?php if (!empty($numberEr)) {echo $numberEr;} ?></span>
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Message</span>
                    </div>
                    <style>
                        textarea{resize:both;}
                     </style>
                    <textarea value="<?php if(!$isError){echo htmlspecialchars($message);} else{echo '';}?>" name="message" id="message" class="form-control" placeholder="Enter your message here..."></textarea>
                    <span style="color: #FF0000"><?php if(!empty($messageEr)) {echo $messageEr; }?></span>
                </div>
                <button name="submit" class="btn btn-danger" type="submit" >SUBMIT</button>
            </form>
        </div>
      
        <div class="col-md-5">
            <div class="address">
                <h5>Address:</h5>
                <p><i class="fa fa-home"></i>4 Garrison, Armed Forces Senior High School,</p>
                
            </div>
            <div class="address address-mdl">
                <h5>Phones:</h5>
                <p><i class="fa fa-mobile"></i>+233244074367</p>
                <p><i class="fa fa-mobile"></i>+233542313999</p>
            </div>
            
            <div class="address">
                <h5>Email:</h5>
                <p><i class="fa fa-envelope"></i>info@okrakyitrends.com</p>
            </div>
            
        </div>
    </div>
  </div>
<div class="agileits-w3layouts-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157.18919442442711!2d-1.6301192862287135!3d6.69048765047445!2m3!1f0!2f39.36128928792749!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0xfdb96e52002a1d9%3A0x63561a6f96843911!2sArmed+Forces+Secondary+Technical+School!5e1!3m2!1sen!2sgh!4v1531969204105" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

 <div class="w3-agilesale welcome">
       <div class="container">
            <h3 class="agileits-title">FAST DELIVERY ACCROSS GHANA AND BEYOND. </h3>
            <p><a href="contactus.php">Contact Us</a></p>
       </div>
   </div>
<?php include 'footer2.php' ?>