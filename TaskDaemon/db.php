<?php

$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];

$connect= mysql_connect("localhost","root","")or die("error".mysql_error());


@mysql_select_db("taskdaemon",$connect) or die ("error".mysql_error());

$query="insert into registration(email,password,name,address,mobile) values ('".$email."','".$password."','".$name."','".$address."','".$mobile."')";



$result=mysql_query($query,$connect) or die(mysql_error());

if(isset($result))
{
echo 'inserted';
}
else
 {
  echo "FAIL";
 }


?>

