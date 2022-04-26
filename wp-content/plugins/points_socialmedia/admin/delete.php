<?php
if($_GET)
{
include dirname(dirname(__FILE__))."../db/connection.php";
    $name= $_GET['name1'];
    $result = mysqli_query($mysqli, "DELETE  FROM validate WHERE name='$name'" );
echo "<script>location.href = 'admin-dashboard';</script>";
}else
{
echo "<script>location.href = 'login';</script>";
}
?>
