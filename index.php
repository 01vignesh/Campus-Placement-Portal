<?php

session_start();

require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<title>Home</title>

<head>
    <?php

    include 'php/head.php'
    
    ?> 
    <style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;}

h2,p {text-align: center;}
</style>       

</head>

<body>

    <!-- header starts -->
    <?php

    include 'php/header.php'

    ?>
    <!-- header ends -->

  
           
            <img src="assets/img/hero-carousel/hero-carousel-1.svg" class="center"> 
            <h2><b> Welcome to Placement Cell </b></h2>
            <p>We Will Support You In Your Entire Placement Journey.</p>     
</div>    
                                    
    <!-- ======= Footer ======= -->

    <?php

    include 'php/footer.php';
    ?>

    <!-- End Footer -->

    

</body>

</html>
