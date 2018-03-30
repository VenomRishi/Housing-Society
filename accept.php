<?php
	include 'database.php';


	if(isset($_POST['submit1']))
	{
		$roomno=$_POST['c'];
		foreach($rommno as $r)
		{
		$qry="select * from temp where roomno=$r";
		$cnt=$db->query($qry);
		$c=$cnt->fetch();
		$name=$c['name'];
		$pass=$c['password'];
		$qry="insert into user (name,password,roomno) values('$name','$pass',$r) ";
		$db->exec($qry);
		echo "Record Added Successfully...........";
	}
	}







?>