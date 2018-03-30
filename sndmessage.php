<?php


include 'database.php';

if (isset($_POST['submit'])) 
{
	# code...
$roomno=$_POST['t1'];
$message=$_POST['t2'];


   session_start();
    $sender=$_SESSION["this_user"];
   
   $query1=$db->prepare("SELECT * from user where roomno='$roomno'");
	$query1->execute();
	$res=$query1->rowcount();


   echo $res;
if ($res==1) 
{
	# code...

//$query="INSERT INTO `messages`(`roomno`, `message`, `sender`) VALUES ('$roomno','$message,'$sender')";
$query="INSERT INTO `messages`(`roomno`, `message`,`sender`) VALUES ('$roomno','$message','$sender')";

$db->exec($query);
}
else
{
		echo '<script language="javascript">';
	echo 'alert("Room no doesnt exist")';
	//echo 'alert("Room No already exist")';
	echo '</script>';

}

//header('Location :Messages.php');
echo "Message sent to :- ".$roomno;
}
elseif (isset($_POST['submit1'])) 
	

{
	include 'database.php';

	

	for ($i=1; $i <=50 ; $i++)
	 { 
	 	$roomno=$i;
	 	$message=$_POST['t2'];
	 	$sender='admin';
		$query="INSERT INTO `messages`(`roomno`, `message`,`sender`) VALUES ('$roomno','$message','$sender')";
		$db->exec($query);
	}
}



?>