<?php
include 'database.php';
session_start();
$usr=$_SESSION["this_user"];

$sth = $db->prepare("DELETE * from messages where roomno='$usr'");
$sth->execute();

?>