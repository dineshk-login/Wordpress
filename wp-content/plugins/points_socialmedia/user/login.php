<?php

if($_POST)
{

  include dirname(dirname(__FILE__))."../db/connection.php";
  //echo "hai";
  $a = "";
  $name=$_POST['uname'];
 // echo  $name;
  //die();
  $_SESSION["header"] = "$name";
  $password=$_POST['password'];
  $sql="SELECT * FROM validate WHERE name='$name' AND password='$password'";
  $result=mysqli_query($mysqli,$sql);
  $row=mysqli_fetch_assoc($result);
  if(!empty($row)){
  $id= $row['id'];}
 // echo $id;

  if (mysqli_num_rows($result))
  {
    if($row['designation'] == 'admin')
    {
      $_SESSION["superadmin"] = "1";
       $_SESSION["id"] = $id;
      // echo $_SERVER['DOCUMENT_ROOT'];
       //die();
      echo "<script>location.href = 'admin-dashboard';</script>";
    }
    else
    {
      $_SESSION["name"] = $name;
      //echo  $_SESSION["name"];
      //print_r($_SESSION);
      //die();
      $_SESSION["id"] = $id;
      echo "<script>location.href = 'user-dashboard';</script>";
    }
  }
  else
  { 
   $a= "error in password or incorrect name";
  }
}
?>

<form action="" method="POST">
<div class="container">
<label style="margin: 0px 0px 0px 10px;" for="uname"><b>Name</b></label>
<input type="text" placeholder="Enter Name" name="uname" required>
<br>
<label style="margin: 0px 0px 0px 10px;" for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required><span><?php
?></span>
<br>
<button style="margin: 0px 100px 100px 200px;" type="submit">Submit</button>
</form>
