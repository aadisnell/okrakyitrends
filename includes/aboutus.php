<?php include 'header2.php'?>
<?php include 'nav2.php'?>

<style>
.jumbotron{
    background-image: url('../pic/aboutus.png'); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: 75px;
    min-height: 400px;
}
    
@media only screen and (max-width:480px){
    .jumbotron{
    background-image: url('../pic/small.png');
    margin-top: 75px;
    min-height: 400px;
    }
}
@media only screen and (max-width:400px){
    .jumbotron{
    background-image: url('../pic/small1.png');
    margin-top: 75px;
    min-height: 400px;
    }
}
</style>
<div class="jumbotron">

</div>

<?php include 'db.php' ;?>

<?php 
 $query = "SELECT * FROM aboutus";
 $result = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($result)){
     $image = $row['image'];
     $about = $row['about'];
     ?>


<div class="about agileinfo">
    <div class="container">
       <div class="row">
        <div class="col-md-6 about-w3left">
           <h4>Okrakyi Trends <br>Apaso) Kasa aa, Mete.</h4>
            <p><?php echo $about ;?></p>
        </div>

<div class="col-md-6 about-w3right">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'">';?>
</div>
</div>
</div>
<?php }?><br><br>
<div class="team">
    <div class="container">
        <h3 class="agileits-title">Our Team</h3>
        <div class="team-row w3ls-team-row">
           <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6 team-wthree-grids">
                <div class="w3ls-effect">
                    <img src="../pic/aksmall.png" alt="designer">
                    <div class="w3layouts-caption">
                        <h4>Gideon</h4>
                        <p>Designer</p>
                    </div>
                    <div class="wthree-icon social-icon">
				        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
                        <a href="#" class="social-button google"><i class="fa fa-instagram"></i></a>  
                    </div>
                </div>
            </div><br>
            
                <div class="col-md-3 col-sm-4 col-xs-6 team-wthree-grids">
                <div class="w3ls-effect">
                    <img src="../pic/owususmall.png" alt="designer">
                    <div class="w3layouts-caption">
                        <h4>Charles</h4>
                        <p>Designer</p>
                    </div>
                    <div class="wthree-icon social-icon">
				        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
                        <a href="#" class="social-button google"><i class="fa fa-instagram"></i></a>  
                    </div>
                </div>
            </div><br>
            
                <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="fb-page" data-href="https://www.facebook.com/Okrakyitrends/" data-tabs="timeline,events,messages" data-width="400" data-height="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Okrakyitrends/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Okrakyitrends/">Okrakyi trends</a></blockquote></div>
   </div>
                </div>
            </div><br>
            
         
            
            </div>
        </div>
    </div>

   <div class="w3-agilesale welcome">
       <div class="container">
            <h3 class="agileits-title">FAST DELIVERY ACCROSS GHANA AND BEYOND. </h3>
            <p><a href="./includes/contactus.php">Contact Us</a></p>
       </div>
   </div>

      
   <br><br>
   

  
<?php include 'footer2.php' ?>