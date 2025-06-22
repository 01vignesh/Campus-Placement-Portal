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
  if(isset($_SESSION['username'])){
    header("Location:dashboard.php");
}
?>

  <div class="container">
    <h2>Admin Login </h2>
    <form action="checklogin.php" method="post">
      <div class="input-box">
        <input type="text" name="username" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter password" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Login" style="background:cornflowerblue;">
      </div>
      
    </form>
    <b><a href="../index.php">Go Home</a></b>
    <pre>                                                                                                      





</pre>
    <?php
   include 'footer.php'
   ?>
  </div>
  
 

</body>
</html>