<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title> 
    <link rel="stylesheet" href="style.css">
    
   </head>
<body>
  <?php
  if(isset($_SESSION['email'])){
    header("Location:company/index.php");
}
?>

  <div class="container">
    <h2>Company Login </h2>
    <form action="checkcompanylogin.php" method="post">
      <div class="input-box">
        <input type="email" id="large" class="form-control" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" id="large" class="form-control" name="password" placeholder="Enter password" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Login" style="background:cornflowerblue;">
      </div>
      <div class="text">
        <h3 > Don't have an account?<a href="register-company.php" style="color:blue;"><b>Create one</b></a></h3>
</div>
      
    </form>
    <pre>                                                                                                      


</pre>
    <b><a href="index.php">Go Home</a></b>
    <pre>                                                                                                      





</pre>
    <?php
   include 'footer.php'
   ?>
  </div>
  
 

</body>
</html>