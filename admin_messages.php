<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if ($_SESSION['this_user']==NULL) 
	{
	header("Location: index1.php");
	}

	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo|Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper">
	<div id="logo" class="container">
		<h1><a href="admin.php">Housing Society Management</a></h1>
		<p><h3>profile</p></h3><br>
		<?php
			session_start();
			echo "Welcome Room Owner :-".$_SESSION["this_user"] ;
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
		<form action="admin_messages2.php" method="post">
		

		<div id="content">
			<div class="post">
				
				<div class="entry">
					<input type="submit" name="submit1" value="New Message"><input type="submit" name="Submit2" value="Inbox">
				</div>
			</div>
			<div class="divider">&nbsp;</div>
			<div class="post">
				
				<div class="entry">
					
				</div>
			</div>
		</div>
		</form>
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
