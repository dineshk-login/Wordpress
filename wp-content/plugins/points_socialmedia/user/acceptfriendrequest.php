<?php

include dirname(dirname(__FILE__))."../db/connection.php";
	$sender= $_GET['sender'];
	$value= $_GET['value'];
	$id=$_SESSION["id"];
if($value==1){
	$result = mysqli_query($mysqli, "UPDATE friends SET status=$value WHERE receiver = $id && sender = $sender");
}
else if($value==2){
	$result = mysqli_query($mysqli, "UPDATE friends SET status=$value WHERE receiver = $id && sender = $sender");
}
//die();
echo "<script>location.href = 'user-dashboard';</script>";
?>