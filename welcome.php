<?php 
include("config.php");
session_start();
if(!isset($_SESSION['id'])){
	header("location:register.php");
}
?>
<?php
//$Email="";
$id=$_SESSION['id'];
$query=mysqli_query($connection,"SELECT * FROM user  where id='$id'");
$data=mysqli_fetch_assoc($query);
$Email=$data['email'];
echo "Welcome ".$Email ;
 ?>
<br/ >

<a href="logout.php?action=logout">Logout</a>';
