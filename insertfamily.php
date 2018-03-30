<?php
     

include 'database.php';


 if(isset($_POST['submit1']))
{
     

     
     $name=$_POST['t2'];
     $age=$_POST['t3'];
     $sex=$_POST['sex'];
     require 'database.php';
     session_start();
     $room=$_SESSION['this_user'];

     $query="INSERT INTO `family`(`roomno`, `name`, `age`, `sex`) VALUES ('$room','$name','$age','$sex')";

    $db->exec($query);

    echo "Inserted $name";
}
elseif (isset($_POST['submit2']))
{
    
     $name=$_POST['t2'];
     $age=$_POST['t3'];
     $sex=$_POST['sex'];
 	session_start();
 	require 'database.php';
 	$room=$_SESSION['this_user'];
    

    $query="DELETE FROM `family` WHERE `roomno`='$room' AND `name`='$name' AND `age`='$age' AND `sex`='$sex'";
	
	$db->exec($query);
	echo "Deleted $name";
}
elseif (isset($_POST['submit3']))

{
    include 'database.php';
session_start();

$usr=$_SESSION["this_user"];
$sth = $db->prepare("SELECT * from family where roomno='$usr'");
$sth->execute();
$result = $sth->fetch();

$r=$sth->rowcount();

$sth = $db->prepare("SELECT * from family where roomno='$usr'");
$sth->execute();
$result = $sth->fetch();

echo "<table border=2>";

for ($i=0; $i<$r ; $i++) 
{ 
    echo "<tr>";

    echo "<td>";
    echo "Name";
    echo "</td>";

    echo "<td>";
    echo $result['name'];
    echo "</td>";

	echo "<td>";
    echo "Age";
    echo "</td>";
	
    echo "<td>";
    echo $result['age'];
    echo "</td>";
	
	echo "<td>";
    echo "Gender";
    echo "</td>";

    echo "<td>";
    echo $result['sex'];
    echo "</td>";

    $result = $sth->fetch();

}


//$e=$result['roomno'];
//echo $result['name']." ".$result['age']." ".$result['sex'];

}
elseif (isset($_POST['submit4']))
 {
    $old=$_POST['t4'];
    $new=$_POST['t5'];


    session_start();
    $usr=$_SESSION["this_user"];
    $sth=$db->prepare("SELECT * FROM user where roomno='$usr' AND password='$old'");
    $sth->execute();  
    $sth1=$sth->rowcount();

    echo $sth1;

    

    if ($sth1==1) 
    {
       $query="UPDATE `user` SET `password`='$new' WHERE roomno='$usr'";
       $db->exec($query);
       header("Location: profile1.php");
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
elseif (isset($_POST['submit5'])) 
{
    $area=$_POST['t6'];
    echo "Per sq feet rate is Rs 2";
    echo "<br>";
    $result=$area*2;
    echo "<b>Total maintenance cost is=Rs</b>".$result;



}

?>
 