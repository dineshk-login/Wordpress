
<?php
if($_SESSION["superadmin"] =="")
{
  //header("Location: ../user/login.php");
   echo "<script>location.href = 'login';</script>";
}
 include dirname(dirname(__FILE__))."../db/connection.php";
if(isset($_POST['name1'])) 
{	
	$x = $_POST['name1'];
	//echo $x;
	//die();
	$password = $_POST['password'];
	$color = $_POST['color'];
	$address = $_POST['address'];
	$result = mysqli_query($mysqli, "UPDATE validate SET name='".$x."',password='".$password."',color='".$color."',address='".$address."' WHERE name='".$x."'");
echo "<script>location.href = 'admin-dashboard';</script>";
}
?>
<?php
if(isset($_GET['name1'])) {
	$name = $_GET['name1'];
	//include_once("../db/connection.php");
	$result = mysqli_query($mysqli, "SELECT * FROM validate WHERE name='".$name."' ");
while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$b = $res['password'];
	$c = $res['color'];
	$d = $res['address'];
}
}
?>
<form name="form1" method="post" action="">
<table border="0">
<tr> 
<td>Name</td>
<td><input type="text" name="name1"  value="<?php echo $a;?>"></td>
</tr>
<tr > 
<td>password</td>
<td><input type="text" name="password"  value="<?php echo $b;?>"></td>
</tr>
<tr > 
<td>color</td>
<td><input type="text" name="color"  value="<?php echo $c;?>"></td>
</tr>
<td>address</td>
<td><input type="text" name="address"  value="<?php echo $d;?>"></td>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
