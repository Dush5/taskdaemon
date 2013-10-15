<?php
	require_once("session.php");
	include 'popups.php';
	?>
<!DOCTYPE html>
<html>
<head>

    <title>taskdaemon | Outsource Your Tasks | Earn Money</title>
    <base href="http://localhost/TaskDaemon/" /> 
    <link rel="icon" href="img/icon.jpg" type="image/jpg" />	
    <link rel="stylesheet" type="text/css" href="stylesheets/homepage.css"/>
	<script type='text/javascript'  src="javascript/javascript.js"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1'></script>    
		<script type='text/javascript' src='javascript/infinite-rotator.js'></script>		

<script type='text/javascript'>
$(document).ready(function(){

// Your existing code

   $(document).keyup(function(e) {
       if (e.keyCode == 27) { // esc keycode
          
		   $('#login_form').hide();
           $('#popup_box').hide();
			
       }
   });
});
</script>
	
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

<script>
$("input[type=password]").blur(function() {
    if (this.value.length <= 4  ) {
        alert("Please enter more than 4 characters.");
        this.focus();
        return false;
    }
});
</script>
	

	</head>
<div class="container1">
	<div class="topdiv" align="right">
	<div class="topdiv" align="right">
	<div align="left">
	<?php
		if (isset($_COOKIE['whoareyou_itsme']))
			{
			echo $_SESSION['email']. "!<br>";
			}
		else
		{
			echo "Welcome guest!<br>";
		}
	?>
</div>

	<img src="img/call.jpg"/>Call us for immediate assistance: +91 9743-442296 &nbsp;&nbsp;
	<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.taskdaemon.com&layout=button_count&show_faces=true&width=450&action=like&colorscheme=light&heig				ht=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true">
            </iframe>

			<a href="https://twitter.com/TaskDaemon" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>
			
			
	</div> 
</div>
</div>
	
<div class="container">    
	<div class="navbar-inner"> 
		<a  href="http://localhost/TaskDaemon/index.php"><img style="margin-top:5px; margin-left:5px; border:none" src="img/icon_test.jpg"/></a>
        	<div class="nav_margin">	
				<ul class="nav">
				
					<li class="nav_active"><a href="index.php">HOME</a></li>
                    <li class="nav_active"><a href="how_it_work.php">HOW IT WORKS</a></li>
					<li class="nav_active"><a href="taskdaemon_services.php">TASKDAEMON SERVICES</a></li>
                    <li class="nav_active"><a href="task_portal.php">TASK PORTAL</a></li>
                    <li class="nav_active"><a href="#join_form">TASKDAEMON FOR BUSINESS</a></li>
                   

<?php 
    if(!isset($_SESSION['email']))
		{

                    echo ' <li class="button-white rcorners_left"><a href="#login_form" id="login_pop">LOGIN</a> </li>';
					echo '	<li class="button-green rcorners_right"><a href="#join_form" id="join_pop">SIGNUP</a></li>';
		}

	else
		{
					echo '<a href="logout.php" class="button-green big_button_padding">SIGNOUT</a>';
		}
?>

			</ul>					
			</div>
    </div>
</div>
<body>