<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Arvo|Oswald" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<?php error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if ($_SESSION['this_user']==NULL) 
	{
	header("Location: index1.php");
	}

	?>
</head>
<body>
<div id="wrapper">
	<div id="logo" class="container">
		<h1><a href="profile1.php">Housing Society Management</a></h1>
		<?php
			session_start();
			echo "Welcome  :-".$_SESSION["this_user"] ;
			?>
		
	</div>
	<div id="menu" class="container">
		<ul>
			
			<li><a href="admin.php" accesskey="2" title="">Profile</a></li>
			<li><a href="admin_messages.php" accesskey="3" title="">Messages</a></li>
			<li><a href="admin_contact us.php" accesskey="5" title="">Contact Us</a></li>
			<li><a href="logout.php" accesskey="4" title="">Log out</a></li>
			
			
		</ul>
	</div>
	
	<div id="page">
		<div id="content">
			<div class="post">
				
				<div class="entry">
					
				</div>
			</div>
			<div class="divider">&nbsp;</div>
			<div class="post">
				
				<div class="entry">
				<img src="images/about1.jpg" width="400" height="300" class="alignleft border">	<p><b>Society Address</b><br>Name : Ashapura Niwas Housing Society<br>Lane : Behind Saibaba Hotel<br>Sector : 10A<br>Nerul(Wast)<br>Navi-Mumbai<br>Pincode - 400706<br>Society Office timing:- 7pm to 9pm</p>			
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
