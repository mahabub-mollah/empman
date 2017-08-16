<?php 
 include("config.php");
 ?>
 <?php
      $email="";
       $adress="";
       $phone="";

 
 if (isset($_POST['search'])) {
 	

 	$name=$_POST['name'];

 

 	///echo "SELECT * FROM emplo_yee WHERE name LIKE'%".$_POST['name']."%'";
 	$value = mysqli_query($connection,"SELECT * FROM emplo_yee WHERE name LIKE '%".$_POST['name']."%'");
 	 
 	 
 	
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
    

	   
	  
	   name:<input type="text" name="name" value="" /><br><br>
	   email:<input type="text" name="email" value="<?php echo $email ?>" /><br><br>
	   adress:<input type="text" name="adress" value="<?php echo $adress ?>" /><br><br>
	   phone:<input type="text" name="phone" value="<?php echo $phone ?>" /><br><br>
	   <input type="submit" name="search" value="find" /><br><br>
	   
</form>

</body>
</html>