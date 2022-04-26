<?php
//session_start();
include dirname(dirname(__FILE__))."../db/connection.php";
//echo $_SESSION["name"];
if ($_SESSION["name"] =="") {
	//header("Location: login.php"); 
	echo "<script>location.href = 'login';</script>";

}
	$receiverr=$_GET['receiver'];
	$id=$_SESSION["id"];
	$value=$_GET['value'];
	//echo $receiverr;
	//die();
if($value==3)
{ 
	$status=3;
	$result = mysqli_query($mysqli, "UPDATE friends SET status=$value WHERE sender = $id && receiver = $receiverr");
	
}
echo "<script>location.href = 'user-dashboard';</script>";

?>