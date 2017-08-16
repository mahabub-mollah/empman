<?php 
  include ("config.php");
  if(isset($_POST['form1']))
 {

 	$filename = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename);

     $path = $filename;
 	   $name=$_POST['name'];
     $email=$_POST['email'];
     $adress=$_POST['adress'];
     $phone=$_POST['phone'];
     $dept_id=$_POST['dept_id'];
     $des_id=$_POST['des_id'];
     
     mysqli_query($connection,"INSERT INTO emplo_yee (name,email,adress,phone,photo,dept_id,des_id)
				VALUES('$_POST[name]','$_POST[email]','$_POST[adress]','$_POST[phone]', '$path','$_POST[dept_id]','$_POST[des_id]')");
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
	   <td>Name</td>
	   <td><input type="text" name="name"/></td>
	</tr>
	<tr>
	   <td>E-mail</td>
	   <td><input type="text" name="email" /></td>
	</tr>
	<tr>
	   <td>Address</td>
	   <td><input type="text" name="adress" /></td>
	</tr>
	<tr>
	   <td>phone</td>
	   <td><input type="text" name="phone" /></td>
	</tr>

	<tr>
	   <td></td>
	   <input type="file" name="image">
	</tr>
	<tr>
	     <td>Department ID</td> 
	    <td> <select name="dept_id" multiple="multiple">
        <option value="">Select Department </option>
         <?php
          $value1 = mysqli_query($connection,"SELECT * FROM department");
          while($row = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $row["dept_id"]; ?>"><?php echo "(".$row["dept_id"].") ".$row["deptname"]; ?></option>
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
            while($row = mysqli_fetch_assoc($value2))
           {
        //print_r($row);
         ?>
          <option value="<?php echo $row["des_id"]; ?>"><?php echo "(".$row["des_id"].") ".$row["desname"]; ?></option>
       <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
  
	

	<tr>

    
       
   
	   <td></td>
	   <td><input type="submit" value="send" name="form1"></td>
	</tr>
	</table>
  </form>
  
  

  
  
	

</body>
</html>