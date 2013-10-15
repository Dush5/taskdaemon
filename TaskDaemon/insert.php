<?php include 'header.php'; ?>

<?php
	require_once("session.php");
if($_SESSION['loginstatus']==false)
{
	header("location:login.php");
	exit();
}
?><div></div>
<!-- Div tag used for Menu bar Don't change   -->
<div class="container container_style">
  <ul>
    <li><a href="insert.php" id="current">Insert In Database</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
<font color="#CCCCCC" size="+2">
<table width="94%"  align="center" cellpadding="5" cellspacing="2" class="maintable">
<tr valign="top" align="center"><td colspan="4" align="center">
<font color="#CC3300" face="Verdana, Geneva, sans-serif" size="+3">Insert Data</font> </td> </tr>

  <tr><form action="insertdata.php" method="post">
    <td width=15%"></td>
    <td valign="top" height="30px" align="left">Service Type<td width=5%"></td><td valign="top">
    <input type="text" id="MODEL_NO" name="service_name" /></td></tr>
    
<td width=15%"></td><td valign="top" height="30px" align="left">Service Id<td width=5%">
</td></td>
<td valign="top"><input type="text" id="MODEL_PIC" name="service_id" /></td></tr>

 <td width=15%"></td><td valign="top" height="30px" align="left">Serive Location<td width=5%"></td></td>
 <td valign="top"><input type="text" id="PRICE" name="service_location" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Time<td width=5%"></td></td><td valign="top"><input type="text" id="service_time" name="service_time" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Logo<td width=5%"></td></td><td valign="top"><input type="text" id="service_logo" name="service_logo" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Price<td width=5%"></td></td><td valign="top"><input type="text" id="service_price" name="service_price" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Category<td width=5%"></td></td><td valign="top"><input type="text" id="service_category" name="service_category" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Details<td width=5%"></td></td><td valign="top"><input type="text" id="service_detail" name="service_detail" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left">Service Mobile<td width=5%"></td></td><td valign="top"><input type="text" id="service_mobile" name="service_mobile" /></td></tr>
 
 <td width=15%"></td><td valign="top" height="30px" align="left"><label><input type="submit" name="subbmit" id="subbmit" value="SUBMIT" /></label></td><td width=5%"><label> <input type="reset" name="reset" id="reset" value="RESET" /></label></td><td valign="top"></td></tr>
 
                
   </form>
   
</table>
</font>

<?php include 'footer.php'; ?>