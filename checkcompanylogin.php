<?php
session_start();
require_once("db.php");

if(isset($_SESSION['email'])){
    header("Location:company/index.php");
}
//Assigning values
$email=$_POST['email'];
$password=$_POST['password'];

//Validating email and password
$sql="SELECT * FROM company WHERE email='$email' AND password='$password'";
$query=$conn->query($sql);
if($query->num_rows > 0)
{
	while ($row = $query->fetch_assoc()) {
	$_SESSION['name'] = $row['companyname'];
	$_SESSION['id_company'] = $row['id_company'];}
    $_SESSION['log']="yes";
    $_SESSION['email']="email";
    header("Location:company/index.php");
    exit();
}
echo("<script language='javascript'>
    window.alert('Incorrect Email or Password!')
    window.location.href='login-company.php'
    </script>");
    exit();
?>