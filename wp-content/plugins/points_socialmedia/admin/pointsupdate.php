<?php
//session_start();
include dirname(dirname(__FILE__))."../db/connection.php";
/*if($_SESSION["name"]=="")
{
echo "<script>location.href = 'login';</script>";

	//header("Location: ../user/login.php");	
}*/
?>
<?php 
if($_POST)
{
$point = $_POST['point']; 
//echo $point;
//die();
//echo $_SESSION["name"];
//die();
$name = $_POST['name'];
$rslt= mysqli_query($mysqli, "SELECT * FROM validate  WHERE id='$name'");
$res= mysqli_fetch_assoc($rslt);
$pnts=$res['creditpoints'];
if($point > $pnts)
{
 	echo "You dont have that much of points. so you are not allowed to send the points";
 	//echo $_SESSION["pntss"];
 	//die();
}
$fname = $_SESSION["name"];
$name = $_POST['name'];
$point = $_POST['point'];
//print_r($_SESSION);
$t=time();
$date=date("d-m-y");
$rslt= mysqli_query($mysqli, "SELECT * FROM validate  WHERE id='$name'");
$res= mysqli_fetch_assoc($rslt);
$receivername=$res['name'];
//echo $point;
//echo $_SESSION["id"];
//die();
$result = mysqli_query($mysqli, "INSERT INTO `transactiondetails`(`senderid`,`sendername`,`receiverid`,`receivername`,`transactionpoints`,`date`,`time`) VALUES('".$_SESSION["id"]."','$fname','$name','$receivername','$point','$date','$t')");
$result = mysqli_query($mysqli, "UPDATE validate SET creditpoints = $point + creditpoints WHERE id='$name'");
$point = mysqli_query($mysqli, "UPDATE validate SET creditpoints =  creditpoints - $point WHERE id='".$_SESSION["id"]."'");
//echo "<script>location.href = 'user-dashboard';</script>";
}
?>

