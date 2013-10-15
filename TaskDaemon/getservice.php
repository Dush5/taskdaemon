<?php
	require_once("session.php");

?>
<?php 
if(!isset($_GET['service_name']))
exit;
?>


<?php include 'header.php'; ?>




<?php
$errmsg = "";
if (! @mysql_connect("localhost","root",""))
{
$errmsg = "Cannot connect to database";
}
// Connectivey line
mysql_connect("localhost","root","")
or die("error".mysql_error());

mysql_select_db("taskdaemon")
or die("eroor".mysql_error());

$result = mysql_query('select * from taskdaemon_service where service_name="' . trim($_GET['service_name']) . '"');

?>

<?php 
while($row = mysql_fetch_array($result))
{ 
echo '<table class="maintable" align="center" width="94%">';
echo '<tr><td colspan="2" align="center"><font face="Verdana, Geneva, sans-serif" color="#CC456C" size="+3">
         </fon></td></tr>';
echo '<tr><td><form action="check_login.php?service_id=' . trim($row['service_id']). '" method="post"></td><td align="center"></form>									<a href="appointment.php?service_id=' . trim($row['service_id']). '"><img class="mobilepage" src="img/';
echo $row['service_logo'] .  '.jpg" height="230"></a></td>';
echo '<td><table width="80%">';
echo '<tr align="left"><td width="30%">Serviceman</td><td>'.$row['service_name'] . '</td></tr>';
echo '<tr align="left"><td>Location</td><td> '. $row['service_location'] . '</td></tr>';
echo '<tr align="left"><td>Price</td><td> '. $row['service_price'] . '</td></tr>';
echo '<tr align="left"><td>Details</td><td> '. $row['service_detail'] . '</td></tr>';
echo '<tr align="left"><td><form action="appointment.php?service_id=' . trim($row['service_id']). '" method="post"><input name="more" type="submit" value="Book service" /></form></td>';
echo '<td><p><form action="check_login.php?service_id=' . trim($row['service_id']). '" method="post"><input name="more" type="submit" value="Login" /></form></p>
</td></tr></table>';
echo '<hr></hr></td></tr>';
}
?>


<?php include 'footer.php'; ?>