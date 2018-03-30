<?php
include 'database.php';

if (isset($_POST['submit1'])) 

	{
		$roomno=$_POST['t1'];
		$query="DELETE FROM `user` WHERE `roomno`='$roomno'";
		$res=$db->exec($query);
		echo "deleted".$roomno;

	}


elseif(isset($_POST['submit2']))
{
$roomno=$_POST['t2'];
$name=$_POST['t3'];
$pass=$_POST['t4'];




$query="UPDATE `user` SET `roomno`='$roomno',`password`='$pass',`name`='$name' WHERE `roomno`='$roomno'";

$db->exec($query);
header("Location: admin.php");
}

elseif (isset($_POST['submit3'])) 
{
	$old=$_POST['t5'];
    $new=$_POST['t6'];


    session_start();
    $usr=$_SESSION["this_user"];
    $sth=$db->prepare("SELECT * FROM admin where name='$usr' AND password='$old'");
    $sth->execute();  
    $sth1=$sth->rowcount();

    echo $sth1;

    

    if ($sth1) 
    {
       $query="UPDATE `admin` SET `password`='$new' WHERE name='$usr'";
       $db->exec($query);
       header("Location: admin.php");
        echo '<script language="javascript">';
       echo "Passoword has been changed ";
       echo '</script>';
    }
    else
    {
            echo '<script language="javascript">';
            echo 'alert("invalid current password")';
            echo '</script>';
    }
	}

	elseif (isset($_POST['submit4'])) 
	{
		include 'database.php';
	session_start();

	$usr=$_SESSION["this_user"];
	$sth = $db->prepare("SELECT * from family");
	$sth->execute();
	$result = $sth->fetch();

	$r=$sth->rowcount();

	$sth = $db->prepare("SELECT * from family");
	$sth->execute();
	$result = $sth->fetch();

	echo "<table border='1' style='border-collapse: collapse;'>";

	for ($i=0; $i<$r ; $i++) 
	{ 
    echo "<tr>";

    echo "<td>";
    echo "Name :-";
    echo "</td>";

    echo "<td>";
    echo $result['name'];
    echo "</td>";

    echo "<td>";
    echo $result['age'];
    echo "</td>";

    echo "<td>";
    echo $result['sex'];
    echo "</td>";

    $result = $sth->fetch();

	}

	echo "Total no of People staying in society are :-  ".$r;
	}

elseif (isset($_POST['submit5'])) 
    {
        header("Location: admin_accept.php");
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
    echo "<input type='checkbox' name='c' value='c1'>";
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
    //echo "<input type='submit' name='c' value='c1'><input type='hidden' name='h' value='".$result['roomno']."'">;
    //echo "</td>";
    

    $result = $sth->fetch();

        }
    //<input type='hidden' name='h' value='".$result['roomno']."'">

    }
?>