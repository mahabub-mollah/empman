<?php









 include ("config.php");
 ?>
 <?php
 if (isset($_POST['submit'])) {
           
       $filename = $_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], "images/".$filename);

      $path = $filename;
      $emp_id=$_POST['emp_id'];
      $name=$_POST['name'];
      $file_id=$_POST['file_id'];

       $res = mysqli_query($connection,"UPDATE file SET file_path='$path',emp_id='$emp_id',name='$name' WHERE file_id='$file_id'");
   }
     

             if(isset($_GET['file_id'])){
                $file_id =$_GET['file_id'];
      
                 $res1 = mysqli_query($connection,"SELECT * FROM file WHERE file_id= $file_id");

                 $value1 = mysqli_query($connection,"SELECT emplo_yee.emp_id,emplo_yee.name FROM emplo_yee");

                 $row = mysqli_fetch_assoc($res1);
                 $o_emp_id=$row['emp_id'];
       
      //print_r($row);
    }



 ?>
 <!DOCTYPE html>
 <html>
        <form action="" method="post" enctype="multipart/form-data">
        <tr>
        
                
            <td>
                <input type="hidden" name="file_id" value="<?php echo $row['file_id'];?>">
            </td>
    </tr>
        <tr>
        
         <td>employee ID</td> 
        <td> <select name="emp_id" multiple="multiple">
        <option value="<?php echo $o_emp_id; ?>">Select employeeid </option>
         <?php
          
          while($rows = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $rows['emp_id']; ?>" <?php if($o_emp_id == $rows['emp_id']) echo 'selected="selected"'; ?> ><?php echo "(".$rows['emp_id'].")".$rows['name'];?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
    </tr>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" value="<?php echo $row['name'];?>" /></td>
  </tr
    <tr>
     <td>Photo</td>
     <td>
      <img src="images/<?php echo $row['file_path']; ?>" alt="" />
      <input type="file" name="image" value="" >
     </td>
  </tr>
    <tr>
        
                
            <td>
                <input type="submit" name="submit" value="update">
            </td>
    </tr>
        
    
    </form>

 <body>
 
 </body>
 </html>