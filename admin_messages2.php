<?php

include 'database.php';

if (isset($_POST['submit1']))

{
	header("Location: admin_crmessage.php");
}


elseif (isset($_POST['Submit2']))
{
	session_start();
	$room=$_SESSION["this_user"];
	$sth = $db->prepare("SELECT * from messages where roomno='$room'");
	$sth->execute();
	$result = $sth->fetch();
	$e=$result['roomno'];
	echo $result['sender']." ".$result['message'];
	header("Location: admin_Inbox.php");
}

?>