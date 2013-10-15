<?php 
if(isset($_COOKIE['whoareyou_itsme']))
{
	$sessionid=$_COOKIE['whoareyou_itsme'];
	session_start($sessionid); //Start Old Session From sessionid
}
else
{
 session_start(); //start New Session
 $_SESSION['email'] = NULL;
 $_SESSION['password']=NULL;
 $_SESSION['loginstatus']=false;

}
//session_register();


$sessionid = session_id();

setcookie('whoareyou_itsme',$sessionid,time()+15*60); //Store Sesion id in cookie

?>