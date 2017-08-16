
<?php

if (isset($_POST['submit'])) {
	include("config.php");
	//include("register.php");
	 $Username=$_POST['Username'];
	 $Password=$_POST['Password'];


	 $query= mysqli_query($connection,"SELECT * FROM user  where username='$_POST[Username]'and password='$_POST[Password]'"); 

	       if(!$query){ 
	     
	       	header("Location:register.php");
	       }


	else {
		$data=mysqli_fetch_assoc($query);
		 session_start();
	 	
            $_SESSION['id']= $data['id'];

           header("Location:index1.php");

	    }
	 	
	 


}




    
	//header("location:register.php")
?>

<html>
<form action="" method ="post">
    <tr>
	   <td>Username</td>
	   <td><input type="text" name="Username" /></td><br><br>
	 </tr>

	 <tr>


	   <td>Password</td>
	   <td><input type="text" name="Password" /></td><br><br>
	 </tr>



	 <tr>
	   <td><input type="submit" name="submit" value="Login" /></td>
	 </tr>
  </table>
</form>
<body>

</body>
</html>