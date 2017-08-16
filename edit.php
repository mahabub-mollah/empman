<?php 
include ("config.php");
  
 
   

  
   		
   		 

   
 ?>
 <?php
    if (isset($_POST['update'])) {
    	 $filename = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename);

     $path = $filename;
      $eemployeeid=$_POST['emp_id'];
 	   $name=$_POST['name'];
     $email=$_POST['email'];
     $adress=$_POST['adress'];
     $phone=$_POST['phone'];
     $dept_id=$_POST['dept_id'];
     $des_id=$_POST['des_id'];
    // echo "UPDATE emplo_yee SET name='$name',email='$email',adress='$adress',phone='$phone',photo='$path',dept_id='$dept_id',des_id='$des_id' WHERE emp_id='$eemployeeid'";
     $res = mysqli_query($connection,"UPDATE emplo_yee SET name='$name',email='$email',adress='$adress',phone='$phone',photo='$path',dept_id='$dept_id',des_id='$des_id' WHERE emp_id='$eemployeeid'");
    	//echo '<pre>';
    	//print_r($data);
     //$row = mysqli_fetch_assoc($res);
    	
    }

     if(isset($_GET['emp_id'])){
	  	$emp_id =$_GET['emp_id'];
	  	
	  	$res = mysqli_query($connection,"SELECT * FROM emplo_yee WHERE emp_id= $emp_id");

	  	$row = mysqli_fetch_assoc($res);

	  	//print_r($row);
	  }
    
    
   
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method ="post" enctype="multipart/form-data">
<table>
<tr>
	   <td></td>
	   <td><input type="hidden" name="emp_id" value="<?php echo $row['emp_id'];?>" /></td>
	</tr
    <tr>
	   <td>Name</td>
	   <td><input type="text" name="name" value="<?php echo $row['name'];?>" /></td>
	</tr>
	<tr>
	   <td>E-mail</td>
	   <td><input type="text" name="email" value="<?php echo $row['email'];?>" /></td>
	</tr>
	<tr>
	   <td>Address</td>
	   <td><input type="text" name="adress" value="<?php echo $row['adress'];?>" /></td>
	</tr>
	<tr>
	   <td>phone</td>
	   <td><input type="text" name="phone" value="<?php echo $row['phone'];?>" /></td>
	</tr>

	<tr>
	   <td>Photo</td>
	   <td>
	   	<img src="images/<?php echo $row['photo']; ?>" alt="" />
	   	<input type="file" name="image" value="" >
	   </td>
	</tr>
	<tr>
	     <td>Department ID</td> 
	    <td> <select name="dept_id">
        <option value="">Select Department </option>
         <?php
          $value1 = mysqli_query($connection,"SELECT * FROM department");
          while($rows = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $rows["dept_id"]; ?>"><?php echo "(".$rows["dept_id"].") ".$rows["deptname"]; ?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>


 <tr>
	    <td>Designation ID</td> 
	     <td> <select name="des_id">
         <option value="">Select Designation </option>
          <?php
              $value2 = mysqli_query($connection,"SELECT * FROM designation");
            while($rows = mysqli_fetch_assoc($value2))
           {
        //print_r($row);
         ?>
          <option value="<?php echo $rows["des_id"]; ?>"><?php echo "(".$rows["des_id"].") ".$rows["desname"]; ?></option>
       <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
	

	<tr>

    
       
   
	   <td></td>
	   <td><input type="submit" value="update" name="update"></td>
	</tr>
	</table>
	

</body>
</html>