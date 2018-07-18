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

<?php include 'footer2.php'?>