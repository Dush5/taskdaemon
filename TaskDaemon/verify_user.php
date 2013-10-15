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


$sql2="SELECT * FROM admin WHERE admin_email='$myusername' and admin_password='$mypassword'";
$result2=mysql_query($sql2);


$result=mysql_query($sql1,$connect) or die(mysql_error());

// Mysql_num_rows is counting table row
$count1=mysql_num_rows($result);
$count2=mysql_num_rows($result2);


// If result matched $myusername and $mypassword, table row must be 1 row

if(($count1 > 0) ||($count2==1))
{
// Redirect to file 
session_register("email");
session_register("password");
$_SESSION['loginstatus']=true;
if($count2)
	 {
		header("location:admin.php");
	 }
	 else
	 {
		 header("location:index.php");
	 }


}
else {
echo '<h1 align="center">"Wrong Username or Password"</h1><br /><h2><a href="login.php>Go To Login Page"</h2></a>';
}

?>