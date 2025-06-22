<?php
session_start();
require_once("db.php");

if(isset($_SESSION['email'])){
    header("Location:user/index.php");
}
//Assigning values
$email=$_POST['email'];
$password=$_POST['password'];

//Validating email and password
$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$query=$conn->query($sql);
if($query->num_rows > 0)
{
	while ($row = $query->fetch_assoc()) {
		$_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
		$_SESSION['id_user'] = $row['id_user'];}
    $_SESSION['log']="yes";
    $_SESSION['email']="email";
    header("Location:user/index.php");
    exit();
}
echo("<script language='javascript'>
    window.alert('Incorrect Email or Password!')
    window.location.href='login-candidates.php'
    </script>");
    exit();
?>