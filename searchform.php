
<?php 
 include("config.php");

 
 if (isset($_POST['search'])) {

 	$emp_id=$_POST['emp_id'];


 	$value = mysqli_query($connection,"SELECT * FROM emplo_yee WHERE emp_id = $emp_id LIMIT 1");
 	while($row=mysqli_fetch_array($value ))
 	{
 		echo"<pre>";

 		print_r($row);
 		echo"</pre>";

 		$name=$row['name'];
        $email=$row['email'];
        $adress=$row['adress'];
        $phone=$row['phone'];

 	}

 }else{
 	   $name="";
      $email="";
       $adress="";
       $phone="";

 }

 	
 

 	

 ?>

<!DOCTYPE html>
<html>

<body>
  
   
 <form action="" method="POST">
    

	   
	   ID:<input type="text" name="emp_id" value="" /><br><br>
	   name:<input type="text" name="name" value="<?php echo $name ?>" /><br><br>
	   email:<input type="text" name="email" value="<?php echo $email ?>" /><br><br>
	   adress:<input type="text" name="adress" value="<?php echo $adress ?>" /><br><br>
	   phone:<input type="text" name="phone" value="<?php echo $phone ?>" /><br><br>

	   

	   <input type="submit" name="search" value="find" /><br><br>
	   
</form>

</body>
</html>