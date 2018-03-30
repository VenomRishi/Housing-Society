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
		<h2><b><?php
			session_start();
			echo "Welcome Room Owner :-".$_SESSION["this_user"] ;
		?></b></h2>
		
	</div>
	<div id="menu" class="container">
		<ul>
<li class="first">
			<li class="first"><a href="admin.php" accesskey="1" title="">Home</a></li>
			<li><a href="admin.php" accesskey="2" title="">Profile</a></li>
			<li><a href="admin_messages.php" accesskey="3" title="">Messages</a></li>
			<li><a href="logout.php" accesskey="4" title="">Log out</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
	</div>
	
	<div id="page">
		<div id="content">
			<div class="post">
				
				<div class="entry">
					
				</div>
			</div>
			<div class="divider"></div>
			<div class="post">
				
				<div class="entry">
					<?php
					include 'database.php';
        session_start();

        $usr=$_SESSION["this_user"];
        $sth = $db->prepare("SELECT * from temp");
        $sth->execute();
        $result = $sth->fetch();
        $r=$sth->rowcount();

        echo "<table border='1'>";
        for ($i=0; $i<$r ; $i++) 
        {
        	$r1=$result['roomno'];
            echo "<tr>";

    echo "<td>";
    echo "<input type='checkbox' name='c[]' value='$r1'>";
    echo "</td>";

    echo "<td>";
    echo "Room no :-";
    echo "</td>";

    echo "<td>";
    echo $result['roomno'];
    echo "</td>";

    echo "<td>";
    echo "name";
    echo "</td>";

    echo "<td>";
    echo $result['name'];
    echo "</td>";

    // echo "<td>";
   // echo "<input type='submit' name='c' value='c1'>";
    //echo "</td>";
    

    $result = $sth->fetch();

        }
    //<input type='hidden' name='h' value='".$result['roomno']."'">

    
?>
			<form action="accept.php" method="post">
				<input type="submit" name="submit1" value="Accept" ><input type="submit" name="submit2" value="Reject"> 
			</form>
					
					
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
