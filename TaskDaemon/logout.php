<?php
	require_once("session.php");
?>

<?php
 $_SESSION['loginstatus']=false;
session_destroy();
setcookie('whoareyou_itsme',$sessionid,time()-60*15);
header("location:index.php");
exit();
?>