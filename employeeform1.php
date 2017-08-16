<?php 
  include ("config.php");
  
  if(isset($_POST['form7']))
 {

 	$filename = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename);

     $path = $filename;
 	 $name=$_POST['name'];
     $email=$_POST['email'];
     $adress=$_POST['adress'];
     $phone=$_POST['phone'];
     
     mysqli_query($connection,"INSERT INTO emp_coppy (name,email,adress,phone,photo)
				VALUES('$_POST[name]','$_POST[email]','$_POST[adress]','$_POST[phone]', '$path')");
 }

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form id="form" action="" method ="post" enctype="multipart/form-data">
   <table>
    <tr>
	   <td>Name</td>
	   <td><input type="text" id="username" name="name" /></td>
	   <td><span class="error_form" id="username_error_msg"></span></td>
	</tr>
	<tr>
	   <td>E-mail</td>
	   <td><input type="text" id="email" name="email" /></td>
	</tr>
	<tr>
	   <td>Address</td>
	   <td><input type="text" id="adress" name="adress" /></td>
	</tr>
	<tr>
	   <td>phone</td>
	   <td><input type="text" id="phone" name="phone" /></td>
	</tr>

	<tr>
	 <td>Department ID</td> 
	 <td> <select>
     <option value="">Select Department </option>
       <?php
        $value1 = mysqli_query($connection,"SELECT * FROM deptcopy");
       while($row = mysqli_fetch_assoc($value1))
       {
        //print_r($row);
         ?>
      <option value="<?php echo $row["dep_id"]; ?>"><?php echo "(".$row["dep_id"].") ".$row["dename"]; ?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
	<tr>
	 <td>Designation ID</td> 
	 <td> <select>
     <option value="">Select Designation </option>
       <?php
        $value2 = mysqli_query($connection,"SELECT * FROM desicopy");
       while($row = mysqli_fetch_assoc($value2))
       {
        //print_r($row);
         ?>
      <option value="<?php echo $row["desi_id"]; ?>"><?php echo "(".$row["desi_id"].") ".$row["desi_name"]; ?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
	


	
	
	<tr>
	   <td></td>
	   <input type="file" name="image">
	</tr>

	<tr>

    
       
   
	   <td></td>
	   <td><input type="submit" value="send" name="form7"></td>
	</tr>
	</table>
</form>
 <script src="formvalidation.js"></script>

</body>
</html>