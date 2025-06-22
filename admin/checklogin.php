<?php
session_start();
$link=mysqli_connect('localhost','root','');
if(!$link)
{
    die("Connection failed:".mysqli_error($link));
}
$db=mysqli_select_db($link,'placement_portal');
if(!$db)
{
    die("Selected database unavailable:".mysqli_error($link));
}

if(isset($_SESSION['username'])){
    header("Location:dashboard.php");
}
//Assigning values
$username=$_POST['username'];
$password=$_POST['password'];

//Validating email and password
$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$query=mysqli_query($link,$sql);
if(mysqli_num_rows($query)>0)
{
    $_SESSION['log']="yes";
    $_SESSION['username']="username";
    header("Location:dashboard.php");
    exit();
}
echo("<script language='javascript'>
    window.alert('Incorrect Email or Password!')
    window.location.href='index.php'
    </script>");
    exit();
?>