
<?php
@session_start();
//echo "hello";
//echo dirname(__FILE__);
include dirname(dirname(__FILE__))."../db/connection.php";
//require(WP_PLUGIN_URL . '/points_socialmedia/db/connection.php');
//exit();
$fname = $_SESSION["name"];
if ( $fname == "")
{
  echo "<script>location.href = 'login';</script>";
}else
{
  $result = mysqli_query($mysqli, "SELECT * FROM validate  WHERE id='".$_SESSION["id"]."'"); 
while($res = mysqli_fetch_assoc($result))
{
  $a = $res['description'];
  "<br>";
  $color_code = $res['color'];
  $points = $res['creditpoints'];
  $pic=$res['profilepicture'];
  $pic1="../wp-content/plugins/points_socialmedia/common/profile/".$pic;
   $_SESSION["pntss"]= $points;
}
}

$a= $_SESSION['id'];
$result = mysqli_query($mysqli, "SELECT * FROM validate  where id='$a'"); 
$res = mysqli_fetch_assoc($result);
$points=$res['creditpoints'];
//echo $points;
$_SESSION['pntss']= $points;
switch (true) 
{
case ($points >=1 && $points<=400):
  $img = "../wp-content/plugins/points_socialmedia/common/image/silver.jpg";
  $des = "You won a Silver trophy with ".$points."points";
break;
case ($points >=201 && $points<=400):
  $img = "../wp-content/plugins/points_socialmedia/common/image/gold.jpg";
 $des = "You won a Gold trophy with ".$points."points";
 break;
case ($points >=401 && $points<=600):
  $img = "../wp-content/plugins/points_socialmedia/common/image/plattinum.jpg";
 $des = "You won a Platinum trophy with ".$points."points";
 break;
case ($points >=601):
  $img = "../wp-content/plugins/points_socialmedia/common/image/diamond.jpg";
 $des = "You won a Diamond trophy with ".$points."points";
 break;
}
?>
  <div><a href='logout'>Logout</a></div>
  <center><div><h1><?= "Welcome ".$fname?></h1></div></center>
  <div><center><img class="user" src="<?php echo$pic1;?>"></center></div>
<?php 
if(isset($_POST["name11"]))
{
$point = $_POST['point']; 
//echo $point;
//die();
//echo $_SESSION["name"];
//die();
$name = $_SESSION["id"];
//echo $name;
//die();
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
$name = $_POST['name11'];
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


  <form action="" method="post" >
  choose the name:	<select name="name11">
  <option>--select--</option>
<?php 
  $result = mysqli_query($mysqli, "SELECT validate.id,validate.name,friends.sender,friends.receiver from validate left join friends on validate.id=friends.receiver where friends.sender='".$_SESSION["id"]."' AND friends.status = 1"); 
while($res = mysqli_fetch_assoc($result)) 
{ 	
  echo "<option value=".$res['id'].">".$res['name']."</option>";
}
?>
</select>
<?php 
  $result = mysqli_query($mysqli, "SELECT * FROM validate WHERE name='".$fname."'");
  $res = mysqli_fetch_assoc($result);
  $pnt = $res['creditpoints'] ; 
  $_SESSION["pntss"] = $res['creditpoints'];
if($pnt == 0){
  echo "you have no points";
}else
{?>
  Select the points:<select name="point">
<?php
for ($i=50; $i <= $pnt; $i+=50) 
{ 
 echo "<option value=".$i.">".$i."</option>";
}
}
?>
  </select><button style="background-color: lightskyblue;" value="update" name="">Send</button>
  <center><div><?php if($pnt>0){?> <img src="<?php  echo $img; ?>"> </div></center>
  <center><div><b><?php echo $des; ?><?php } ?></b></div></center>
  </form>	
   <?php if(isset($_POST["receiver"])){
   $a= $_SESSION['id'];
   $b = $_REQUEST['receiver'];
   $result = mysqli_query($mysqli, "SELECT * FROM validate WHERE id= '$a'"); 
   $res = mysqli_fetch_assoc($result);
if($b==$a)
{
   echo "you are not allowed to send friendrequst to yourself";
   die();
}
   $rslt = mysqli_query($mysqli, "SELECT * FROM friends WHERE receiver='$b'AND sender='$a'");
   $rees = mysqli_fetch_assoc($rslt) ;
   if(empty($rees)){
      $result = mysqli_query($mysqli, "INSERT INTO `friends`(`sender`,`receiver`) VALUES('$a','$b')");  
   echo "<script>location.href = 'user-dashboard';</script>";
   }else if($rees['status'] == 3 || $rees['status'] == 2){
      $result = mysqli_query($mysqli, " UPDATE friends SET status=0 WHERE id='".$rees['id']."'");
   echo "<script>location.href = 'user-dashboard';</script>";
   }else{
      echo "you already send friend request";
      die();
   }
}


?>
  <form action='' method="post">
  choose name for send friendrequest:	<select name="receiver">
  <option>--select--</option>

<?php
//include_once("../db/connection.php"); 
  $result = mysqli_query($mysqli, "SELECT * FROM validate  where designation!='admin' AND name!='$fname'"); 
while($res = mysqli_fetch_assoc($result)) 
{ 	
  echo "<option value=".$res['id'].">".$res['name']."</option>";
}
?>
  </select>
  <input type="submit" value="send friend request" name="">
  </form> 
<?php  
  $ressult = mysqli_query($mysqli, "SELECT validate.id,validate.name,friends.id,friends.sender,friends.receiver from validate left join friends on validate.id=friends.sender where friends.receiver='".$_SESSION["id"]."'AND friends.status = 0");
while($ress = mysqli_fetch_assoc($ressult)) 
{  
 ?>
  <table><form action="" method="post">
  <tr><td><?php echo $ress['name'] ."sends you a friendrequest" ?></td><td> <a href='acceptfriend?sender=<?= $ress['sender']?>&value=1'>accept</a></td><td> <a href='acceptfrien?sender=<?= $ress['sender']?>&value=2'>reject</a></td></form>  </tr></table>
<?php
}
?>
<?php
$search="";
$match = "";
if(isset($_POST["search"])){
  $search=$_POST["search"];
}
$a= $_SESSION['id'];
//echo $a;
$b=$_SESSION["name"];
?><center>
<form action="" method="post">
Search friend:<input type="text" name="search" value="<?=$search;?>"><?if($_post){ echo $match;}?>
<input type="submit" value="submit" name="">
</form></center>
<table>
<?php
$sql = mysqli_query($mysqli, "SELECT *,id as uid FROM validate  WHERE  name='".$search."' AND name!= '".$b."'");
  $i=0;
while($res = mysqli_fetch_assoc($sql)){
   $i=$i+1;
  if($i % 2 == 0){
    $color = " #D3D3D3";
  }else{
    $color = " #87CEEB";
  }
?>
<tr bgcolor="<?= $color;?>"><td><?= $i;?></td><td><?= $res['name'];?></td>
<td><a href='profile?user_id=<?= $res['uid']?>'>view profile</a></td></tr>
<?php  }?>
</table>
