<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php error_reporting(E_ALL ^ E_NOTICE);
session_start();
if ($_SESSION['this_user']==NULL) 
{
	header("Location: index1.php");
}

?>
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
		<h1><a href="profile1.php">Housing Society Management</a></h1>
		<p><h3>profile</p></h3><br>
		<h2><b><?php
			session_start();
			echo "Welcome Room Owner :-".$_SESSION["this_user"] ;
		?></h2></b>
		
	</div>
	<div id="menu" class="container">
		<ul>
			<li class="first">
				<li><a href="profile1.php" accesskey="2" title="">Profile</a></li>
			<li><a href="messages.php" accesskey="3" title="">Messages</a></li>
			<li><a href="contact us.php" accesskey="5" title="">Contact Us</a></li>
			<li><a href="logout.php" accesskey="4" title="">Log out</a></li>
		</ul>
	</div>

	<div id="page">
		<form action="insertfamily.php" method="post">
		<p><b><h2>Enter Family Details:-</h2></b></p><br>
		
		<b><h3>Name</h3></b><input type="text" name="t2" required><br>
		<br><b><h3>Age</h3></b><input type="text" name="t3" required><br>
		<br><b><h3>Gender</h3></b>Male<input type="radio" name="sex" value="Male" required>
		 Female<input type="radio" name="sex" value="Female" required><br><br>
		 <br><input type="submit" name="submit1" value="ADD">
		 <input type="submit" name="submit2" value="DELETE">
		 <hr>
		</form>

		<form action="insertfamily.php" method="post">
		 <p><b><h2>Show Details of Family Members</h2></b></p><br>
		  <input type="submit" name="submit3" value="Show"><br>
		  </form>

		  <hr>
		<form action="insertfamily.php" method="post">
		  <p><b><h2>Change Password</h2></b></p><br>
		  <b><b>Old Password</b></b><br><br><input type="password" name="t4" required><br>
		  <p><b>New Password</b></p><input type="password" name="t5" required><br>
		  <br>
		  <br>
		  <input type="submit" name="submit4" value="Change"><br>
		</form>

		<form action="insertfamily.php" method="post">
		  <p><b><h2>Amount payable for maintenance</h2></b></p><br>
		  <p><b><h3>Area of my flat (in sq ft)</h3></b></p><input type="number" name="t6" required><br>
		  <br>
		  <br>
		  <input type="submit" name="submit5" value="Total">
		  </form>
		<div id="content">
			<div class="post">
				
				<div class="entry">
					 
				</div>
			</div>
			<div id="sidebar">
					

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
	
</div>
</body>
</html>
