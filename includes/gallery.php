
            
<?php include 'db.php'?>
<?php include 'header2.php'?>

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
            <li class="nav-item active">
              <a class="nav-link" href="gallery.php">Our Designs
               <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<style>
.jumbotron{
    background-image: url('../pic/ourdesigns.png'); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: 75px;
    min-height: 400px;
}
    @media only screen and (max-width:400px){
    .jumbotron{
    background-image: url('../pic/smalldesigns.png');
    margin-top: 75px;
    min-height: 400px;
    }
}

</style>
<div class="jumbotron">

</div>

<?php 
$query = "SELECT * FROM gallery";
$result = mysqli_query($con,$query);
$rows = mysqli_fetch_assoc($result); // find total rows returned by database

if($rows > 0){
    $cols = 3;
    $counter = 1;
    $nbsp = $cols - ($rows % $cols);
    
    $container_class = 'container';
    $row_class = 'row';
    $col_class = 'col-sm-4';
    
    echo '<div class="'.$container_class.'">'; // container open;
    while($row = mysqli_fetch_assoc($result)){
        if(($counter % $cols) == 1){
            echo '<div class="'.$row_class.'">'; //start a new row
            
        }
        $img = $row['pictures'];
        echo '<div class="'.$col_class.'"><img src="data:image/jpeg;base64,'.base64_encode($img).'"></div>';
        
        if(($counter % $cols) == 0){
            echo '</div>'; // close the row
        }
        $counter++;  //increase counter 
        
    }
    $result->free();
    if($nbsp > 0){
        for($i = 0; $i< $nbsp; $i++){ //Adjustment to add unused columns
            echo '<div class="'.$col_class.'">&nbsp;</div>';
        }
        echo '</div>'; // close the row
    }
    echo '</div>'; //close the container 
}
?> 
<?php include 'footer2.php'?>