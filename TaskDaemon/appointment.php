<?php
	require_once("session.php");

if($_SESSION['loginstatus']==false)
{
	header("location:check_login.php");
	exit();
}
?>


<?php include 'header.php'; ?>

<form action="order.php"  method="post">
<div class="container container_style">
<input type="text" name="email" id="email" placeholder="Confirm Yout Email" ><br>
<input type="text" name="name" placeholder="name" required><br>

<input type="text" name="date" id="datepicker" placeholder="Select Your Date" required /><br>


<select name="time">
  <option>Select Time</option>
  <option value="9">9:00-10:00</option>
  <option value="10">10:00-11:00</option>
  <option value="11">11:00-12:00</option>
  <option value="12">12:00-01:00</option>
  <option value="01">01:00-02:00</option>
  <option value="02">03:00-03:00</option>
</select>
<br>
<input type="number" name="mobile" placeholder="Mobile" required><br>




<button type="submit" name="submit">Book</button>

</div>
</form>
<?php include 'footer.php'; ?>