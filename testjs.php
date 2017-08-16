<?php 
 $errpath=$errname=$erremail=$erradress=$errphone=$errdept_id=$errdes_id="";
 ?>

<?php 


 $path = $name= $email= $adress=$phone= $dept_id=$des_id="";
 
  include ("config.php");
  if(isset($_POST['form1']))
 {
          if(empty($_POST['photo'])){
          $errpath="Photo is Required";

            }else{
           $path=validate($filename);
              }
          if(empty($_POST['name'])){
          $errname="Name is Required";

            }else{
           $name=validate($_POST['name']);
              }
              if(empty($_POST['email'])){
           $erremail="E-mail is Required";

            }else{
           $email=validate($_POST['email']);
              }
              if(empty($_POST['adress'])){
           $erradress="Address is Required";

            }else{
           $adress=validate($_POST['adress']);
              }
              if(empty($_POST['phone'])){
           $erradress="Phone number is Required";

            }else{
           $phone=validate($_POST['phone']);
              }
              if(empty($_POST['dept_id'])){
           $errdept_id="Phone number is Required";

            }else{
           $dept_id=validate($_POST['dept_id']);
              }
              if(empty($_POST['des_id'])){
           $errdes_id="Phone number is Required";

            }else{
           $des_id=validate($_POST['des_id']);
              }


 	      $filename = $_FILES['image']['name'];
       move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename);

     
    
    
     
     
     mysqli_query($connection,"INSERT INTO emplo_yee (name,email,adress,phone,photo,dept_id,des_id)
				VALUES('$_POST[name]','$_POST[email]','$_POST[adress]','$_POST[phone]', '$path','$_POST[dept_id]','$_POST[des_id]')");
 }
                function validate($data){
                     $data= trim($data);
                     $data=stripcslashes($data);
                     $data=htmlspecialchars($data);
                     return $data;
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
<p style="color:red"> * Required</p>
    <tr>
	   <td>Name</td>
	   <td><input type="text" name="name"/>*<?php echo $errname;  ?></td>
	</tr>
	<tr>
	   <td>E-mail</td>
	   <td><input type="text" name="email" />* <?php echo $erremail;  ?></td>
	</tr>
	<tr>
	   <td>Address</td>
	   <td><input type="text" name="adress"/>* <?php echo $erradress;  ?></td>
	</tr>
	<tr>
	   <td>phone</td>
	   <td><input type="text" name="phone" />* <?php echo $errphone;  ?></td>
	</tr>

	<tr>
	   <td>Photo</td>
	     <td><input type="file" name="image">*<?php echo $errpath;  ?>   </td>
	</tr>
	<tr>
	     <td>Department ID</td> 
	    <td> <select name="dept_id" >
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
                </select>* <?php echo $errdept_id;  ?></td>


                <br><br> 
	</tr>


 <tr>
	    <td>Designation ID</td> 
	     <td> <select name="des_id">
         <option value="">Select Designation  </option>
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
                </select>* <?php echo $errdes_id;  ?></td>


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