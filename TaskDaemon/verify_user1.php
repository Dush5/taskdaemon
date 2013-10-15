<?php

$email=$_POST['email'];
$password=$_POST['password'];

$connect= mysql_connect("localhost","root","")or die("error".mysql_error());

@mysql_select_db("taskdaemon",$connect) or die ("error".mysql_error());

$myusername = stripslashes($email);
$mypassword = stripslashes($password);
$myusername = mysql_real_escape_string($email);
$mypassword = mysql_real_escape_string($password);

$sql1="SELECT * FROM registration WHERE email='$myusername' and password='$mypassword'";

$result=mysql_query($sql1,$connect) or die(mysql_error());

// Mysql_num_rows is counting table row
$count1=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
$count2;
if(($count1 > 0))
{
// Redirect to file 
session_register("email");
session_register("password");
$count2=$_SESSION['loginstatus']=true;
	
}
else {
echo '<h1 align="center">"Wrong Username or Password"</h1><br /><h2><a href="login.php>Go To Login Page"</h2></a>';
}
if(($count2!=0))
{
header("location:appointment.php");
die("Redirecting to: appointment.php");
}
?>