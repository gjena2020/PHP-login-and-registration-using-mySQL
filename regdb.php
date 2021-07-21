<?php
include('conn.php');
$username=$_POST['regusername'];
$pass=$_POST['regpass'];
$sql="INSERT INTO `user`(`username`, `password`) VALUES ('".$username."','".$pass."')";
$res=mysqli_query($db,$sql);
if($res)
{
	$result= "Insert sucess";
}
else
{
	$result= "Failure";
}
?>
<h1><?php echo $result;?></h1>
<a href="login.php">Login page</a><br/>
<a href="register.php">Register page</a><br/>