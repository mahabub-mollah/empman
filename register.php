
<?php
if(isset($_POST['submit'])){

include("config.php");


	$Email=$_POST['Email'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Rpassword=$_POST['Rpassword'];
	$status=$_POST['check'];
	

    $query= mysqli_query($connection,"INSERT INTO user (email,username,password,rpassword,status)
				  VALUES('$_POST[Email]', '$_POST[Username]','$_POST[Password]', '$_POST[Rpassword]','$_POST[check]')");
                   
                   

if ($query) {
	echo"registered successfully you can now log in " ?><a href="login.php">Login</a>
	<?php  
   }

 }
?>








<!DOCTYPE html>
<html>
<form action="" method ="post" enctype="multipart/form-data">
    <table>
       <tr>
	   <td>Email</td>
	   <td><input type="text" name="Email" required></td>
	 </tr>
	 <tr>
	   <td>Username</td>
	   <td><input type="text" name="Username" required></td>
	 </tr>
	 <tr>
	   <td>Password</td>
	   <td><input type="password" name="Password"  required></td>
	 </tr>
	 <tr>
	   <td>Retypepassword</td>
	   <td><input type="text" name="Rpassword"  required></td>
	 </tr>
	 <tr>
	   <td>I accept term and condition</td>
	   <td><input type="checkbox" name="check" value="Accepted"  required></td>
	 </tr>
	 <tr>
	  
	   <td><input type="submit" name="submit" value="submit" /></td>
	 </tr>
  </table>
</form>
<body>

</body>
</html>