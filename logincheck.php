<?php



if (isset($_POST['submit']))

{
    $roomno=$_POST['t1'];
    $password=$_POST['t2'];
    
    session_start();
    if(isset($_POST['t1'], $_POST['t2'])){
        require 'database.php';

        $query = $db->prepare("SELECT roomno, password FROM user WHERE roomno=:username AND password=:password");
        $query->bindParam(':username', $_POST['t1']);
        $query->bindParam(':password', $_POST['t2']);
        $query->execute();

        if($row = $query->fetch()){
            $_SESSION["this_user"]= $row['roomno'];
            header("Location: profile1.php");
        }
		else
		{	
           // $_SESSION["invalid"];
           // header("Location: index1.php");
			echo '<script language="javascript">';
			echo 'alert("invalid usename or password")';
			echo '</script>';
            

				include "index1.php";
		}
    }
}

elseif (isset($_POST['submit1'])) 
{
    $roomno=$_POST['t3'];
    $password=$_POST['t4'];


    session_start();
    if(isset($_POST['t3'], $_POST['t4'])){
        require 'database.php';

        $query = $db->prepare("SELECT name, password FROM admin WHERE name=:username AND password=:password");
        $query->bindParam(':username', $_POST['t3']);
        $query->bindParam(':password', $_POST['t4']);
        $query->execute();

        if($row = $query->fetch()){
            $_SESSION["this_user"]= $row['name'];
            header("Location: admin.php");
        }
        else
        {   
            echo '<script language="javascript">';
            echo 'alert("invalid usename or password")';
            echo '</script>';
                //include "index.php";
        }
    }
    
}



?>