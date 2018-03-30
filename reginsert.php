<?php
     
     $roomno=$_POST['t1'];
     $pass=$_POST['t2'];
     $name=$_POST['t3'];
    


require 'database.php';



$query1=$db->prepare("SELECT * from user where roomno='$roomno'");
$query1->execute();
$res=$query1->rowcount();

if ($res==0)
 {
	# code...


$query="INSERT INTO `user`(`roomno`, `password`, `name`) VALUES ('$roomno','$pass','$name')";

$db->exec($query);

header("Location: index1.php");
}
else
{
	echo '<script language="javascript">';
	echo 'alert("please enter your own room no ")';
	//echo 'alert("Room No already exist")';
	echo '</script>';
	//header("Location: register.php");
	
	
            
}


?>