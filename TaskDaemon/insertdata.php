<?php
// TEMPRORY DATASER WHICH HOLD FETCHED DATA
//$<ANYVARIBALE = $_POST['ATTRIBUTES NAME'];

$MODEL_NO=$_POST['service_name'];
$MODEL_PIC=$_POST['service_id'];
$BRAND_NAME=$_POST['service_location'];
$PRICE=$_POST['service_time'];
$CATEGORY=$_POST['service_logo'];
$BRAND_LOGO=$_POST['service_price'];
$MINI_DTL=$_POST['service_category'];
$MEMORY=$_POST['service_detail'];
$OS=$_POST['service_mobile'];
// DATASET oVER
// Connectivey line
mysql_connect("localhost","root","")
or die("error".mysql_error());
mysql_select_db("taskdaemon")
or die("eroor".mysql_error());

// Sql Query Area
// BE CAREFUL ABOUT . " ' AND ,

$query="insert into taskdaemon_service(service_name,service_id,service_location,service_time,service_logo,service_price,service_category,service_detail,service_mobile) values('".$MODEL_NO."','".$MODEL_PIC."','".$BRAND_NAME."','".$PRICE."','".$CATEGORY."','".$BRAND_LOGO."','".$MINI_DTL."','".$MEMORY."','".$OS."')";

mysql_query($query)
or die("error".mysql_error());
?>
<font face="Verdana, Geneva, sans-serif" color="#CCCCCC">
<table width="100%" height="217"  cellpadding="2" cellspacing="2">
<tr>
<td width="54%" align="center"><p>
<h1> Your Data Has Been Successfully Inserted</h1>
</p></td>
</tr>
<tr>
<td width="45%" align="center"><p>
<h2><a href="admin.php">Go To Main Page </a></h2>
</p></td>
</tr>
<tr>
<td width="7%" align="center"><p>
<form action="insert.php" method="post">
<label>
<input type="submit" name="subbmit" id="subbmit" value="Go to Login" />
</label>
</form>
</p></td>
</tr>
</tr>

</table>
</font>
