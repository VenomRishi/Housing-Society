<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo|Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button 
{ 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="logo" class="container">
		<h1><a href="admin.php">Housing Society Management</a></h1>
		<?php
			session_start();
			echo "Welcome  :-".$_SESSION["this_user"] ;
			?>
		
	</div>
	<div id="menu" class="container">
		<ul>
			<li class="first">
			<li><a href="admin.php" accesskey="2" title="">Profile</a></li>
			<li><a href="admin_messages.php" accesskey="3" title="">Messages</a></li>
			<li><a href="admin_contact us.php" accesskey="5" title="">Contact Us</a></li>
			<li><a href="logout.php" accesskey="4" title="">Log out</a></li>
		</ul>
	</div>
	
	<div id="page">
		<form action="changepass.php" method="post">
			<p><b><h3>Delete a ID</h3></b></p><br>
			<b><h3>Room No</h3></b><input type="number" name="t1" required><br>
			<br><input type="submit" name="submit1" value="DELETE">
			<br>
		</form>
			<br>
			<br>
		<form action="changepass.php" method="post">
			<p><b><h3>Change a password of ID</h3></b></p><br>
			<b><h3>Room No</h3></b><input type="number" name="t2" required>
			<b><h3>Name</h3></b><input type="text" name="t3" required>
			<b><h3>New Password</h3></b><input type="text" name="t4" required><br>
			<br><input type="submit" name="submit2" value="Change Password">
			<br>
		</form>
			<br>
			<br>
		<form action="changepass.php" method="post">
			<p><b><h3>Change a admin password </h3></b></p><br>
			<b><h3>Old Password</h3></b><input type="text" name="t5" required><br>
			<b><h3>New Password</h3></b><input type="text" name="t6" required><br>
			<br><input type="submit" name="submit3" value="Change Password">
			<br>
		</form>
				
		<div id="content">
			<div class="post">
				
				<div class="entry">
					
				</div>
			</div>
			<div class="divider">&nbsp;</div>
			<div class="post">
				
				<div class="entry">
					
					
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			
			
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
<div id="footer">
	<p>Copyright &copy; 2012 TemplateName. Designed by <a href="http://www.freecsstemplates.org">FCT</a> | Photos by <a href="http://fotogrph.com/">FotoGrph</a>.</p>
</div>
</body>
</html>
