<?php
	require_once("session.php");

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

$result = mysql_query("SELECT * FROM taskdaemon_service group by(service_name)");

?>
<div class="container container_style">
 	<table width="94%" align="center" border="0" cellpadding="2" cellspacing="1" height="100%" width="100%" id="">
  <tr align="center">
    <td colspan="5" ><font face="Verdana, Geneva, sans-serif" color="#CC456C" size="+3">
      <p>TaskDaemon Services</p>
      </fon></td>
    </tr  align="center">
	<tr>
		<?php
			$i = 0;
				while($row = mysql_fetch_array($result))
					{
					$i++;
echo '<tr class="service_image service_image_border ">
<td align="center" valign="top">
<form action="check_login.php?service_id=' . trim($row['service_id']). '" method="post">
</td>
<td align="center">
</form>
<a href="getservice.php?service_name=' . trim($row['service_name']). '">
<img class="mobilepage" src="img/';
echo $row['service_logo'] .  '.jpg" height="200" width="170">
</a>
</td>';
					
if($i%4==0)
							echo '</tr>';
					}
		?>
</tr>		
	</table>                                        
</div>
<?php include 'footer.php'; ?>