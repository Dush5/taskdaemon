<?php include 'header.php'; ?>

<?php
	require_once("session.php");
	if($_SESSION['loginstatus']==false)
{
	header("location:login.php");
	exit();
}
?>
<div class="container container_style">
<!-- Div tag used for Menu bar Don't change   -->
<div >
  <ul>
    <li><a href="insert.php" id="current">Insert In Database</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
</div>
<?php include 'footer.php'; ?>
