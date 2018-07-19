<?php include 'header2.php'?>

            <style>

                nav{
                    background-color:rgba(238,130,238,0.5);
                    
                }
         #col {
                    color: 1e0e0c;
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
            <form class="form-group" action="contact.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">@</span>
                    </div>
                    <input type="email" id="email" class="form-control" placeholder="Email Address" name="email">
                </div>
                
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Phone No.</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Phone No." id="number" name="number">
                </div>
                 <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Message</span>
                    </div>
                    <style>
                        textarea{resize:both;}
                     </style>
                    <textarea  name="message" id="message" class="form-control" placeholder="Enter your message here..."></textarea>
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
<script>
    $(document).ready(function(){
       $('#submit').click(function(){
           var name = $('#name').val();
           var email = $('#email').val();
           var number = $('#number').val();
           var message = $('#message').val();
           
       }); 
        
        if(name == ''||email == ''||number == ''||message == ''){
            alert("Sorry, please fill all the fields below ..");
        }else{
            $.ajax({
                type:"POST",
                url:"contact.php",
                data:{name:name , email:email , number:number, message:message},
                success:function(data){
                    alert(data);
                     $('#name').empty();
                     $('#email').empty();
                      $('#number').empty();
                      $('#message').empty();
                }
            });
        }
    });
</script>

<?php include 'footer2.php'?>