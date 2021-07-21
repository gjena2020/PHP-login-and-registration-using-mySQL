<?php
include('conn.php');
$username=$_POST['logusername'];
$pass=$_POST['logpass'];
$sql="SELECT * FROM `user` WHERE `username`='".$username."' AND `password`='".$pass."'";
$res=mysqli_query($db,$sql);
$st=mysqli_fetch_array($res);
if($st['username']==$username && $st['password']==$pass)
{
	$result= "login sucess";
}
else
{
	$result= "login failed";
}
?>
<h1><?php echo $result;?></h1>
<a href="login.php">Login page</a><br/>
<a href="register.php">Register page</a><br/>
