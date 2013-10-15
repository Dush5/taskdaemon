<?php

$email=$_POST['email'];
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$mobile=$_POST['mobile'];
$dateoforder= date("d-m-y");
//$myusername=$_SESSION['email'];


$connect= mysql_connect("localhost","root","")or die("error".mysql_error());


@mysql_select_db("taskdaemon",$connect) or die ("error".mysql_error());

$query1="insert into orders(userId,userFirstName,date,time,mobile,date_of_order) values ('".$email."','".$name."','".$date."','".$time."','".$mobile."','".$dateoforder."')";



$result=mysql_query($query1,$connect) or die(mysql_error());

if(isset($result))
{
echo 'Your Service is booked we will call you soon';
}
else
 {
  echo "fail to book try again";
 }



?>

