<?php
include dirname(dirname(__FILE__))."../db/connection.php";
if ($_SESSION["superadmin"] =="")
{
   echo "<script>location.href = '';</script>";
}else{
	if ($_GET){
$name = $_GET['name1'];
$result = mysqli_query($mysqli, "SELECT * FROM validate WHERE name='".$name."' ");
while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$c = $res['color'];
	$d = $res['address'];
}
?>

<form name="form1" method="POST" action="">
<table border="0">
<tr> 
<td>Name</td>
<td><input type="text" name="name"  value="<?php echo $a;?>">
</td>
</tr>
<tr > 
<td>color</td>
<td><input type="text" name="color"  value="<?php echo $c;?>"></td>
</tr>
<td>address</td>
<td><input type="text" name="address"  value="<?php echo $d;?>"></td>
</tr>
</table><?php }}?>
