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

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h4>Form List</h4>
</head>
<body>
<p><a href="employeeform.php">Employeee Form</a></p>
<p><a href="departmentform.php">department Form</a></p>
<p><a href="designationform.php">designation Form</a></p>
<p><a href="fileform1.php">file Form</a></p>
<p><a href="finallrvqform.php">Leave request Form</a></p>

    
    <h4>Show info List</h4>
  <p><a href="join.php">Employeee info with deptment and designation</a></p>
  <p><a href="finalshowlv.php">leave request info</a></p>
   <p><a href="showfileform1.php">Employee file info</a></p>
   <p><a href="searchform1.php">search by name</a></p>
   <p><a href="searchform.php">search by employee ID</a></p>
  <p><a href="newsearch.php">search by department and designation</a></p>
</body>
</html>