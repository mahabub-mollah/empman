<?php 
 include("config.php");
 ?>
 <?php 
 if (isset($_POST['search'])) {
     $dept_id=$_POST['dept_id'];
     $des_id=$_POST['des_id'];
         

       //$o_dept_id = $row['dept_id'];
       // $o_des_id = $row['des_id'];
 }else{

      $dept_id="";
      $des_id="";
    }
   

?>

<!DOCTYPE html>
<html>

<body>
  
   
 <form action="" method="POST">
    <tr>
       <tr>
       <td>Department ID</td> 
      <td> <select name="dept_id">
        <option value="<?php echo $o_dept_id; ?>">Select departmentid </option>
         <?php
          $o_dept_id = $row['dept_id'];
          $value1= mysqli_query($connection,"SELECT * FROM department");
          
          while($rows = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $rows['dept_id']; ?>" <?php if($o_dept_id == $rows['dept_id']) echo 'selected="selected"'; ?> ><?php echo "(".$rows['dept_id'].")".$rows['deptname'];?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
  </tr>
                <select name="des_id" style="margin-top: 26px; margin-left: 10px">
            <option value="">Select Designation</option>
        <?php 
        $value2= mysqli_query($connection,"SELECT * FROM designation");
          while($rows = mysqli_fetch_array($value2)){
            echo "(".$rows['des_id'].")".$rows['des_name'];
        ?>
            <option value="<?php echo $rows['des_id']; ?>"><?php echo "(".$rows['des_id'].")".$rows['desname'];?></option>
        <?php
            }
        ?>
    </select>


                <br><br> 

   






  </tr>
     <input type="submit" name="search" value="find" /><br><br>



     <hr>
    <table border="1" cellpadding="5" cellspacing="0" style="clear: both;">
       <tr>
         <th>photo</th>
         <th>name</th>
         <th>email</th>
         <th>adress</th>
         <th>phone</th>
         <th>Departmentname</th>
         <th>Designation</th>
       </tr>
       <?php 
          $search1= mysqli_query($connection, "SELECT * FROM  emplo_yee LEFT JOIN department ON emplo_yee.dept_id = department.dept_id  LEFT JOIN designation ON emplo_yee.des_id = designation.des_id where emplo_yee.dept_id= '$dept_id'");

           while ($row =mysqli_fetch_array($search1)) { 
          
          ?>
       <tr>
         <td><img src="images/<?php echo $row['photo']; ?>" alt="" /></td>
         <td><?php echo $row['name'] ?></td>
         <td><?php echo $row['email'] ?></td>
         <td><?php echo $row['adress'] ?></td>
         <td><?php echo $row['phone'] ?></td>
         <td><?php echo $row['deptname'] ?></td>
         <td><?php echo $row['desname'] ?></td>
       </tr>
       <?php 
        }
      
        

  ?>
        <table border="1" cellpadding="5" cellspacing="0" style="clear: both;">
       <tr>
         <th>photo</th>
         <th>name</th>
         <th>email</th>
         <th>adress</th>
         <th>phone</th>
         <th>Departmentname</th>
         <th>Designation</th>
       </tr>
       <?php 
          $search2= mysqli_query($connection, "SELECT * FROM  emplo_yee LEFT JOIN department ON emplo_yee.dept_id = department.dept_id  LEFT JOIN designation ON emplo_yee.des_id = designation.des_id where emplo_yee.des_id= '$des_id'");
           while ($row =mysqli_fetch_array($search2)) { 
          
          ?>
       <tr>
         <td><img src="images/<?php echo $row['photo']; ?>" alt="" /></td>
         <td><?php echo $row['name'] ?></td>
         <td><?php echo $row['email'] ?></td>
         <td><?php echo $row['adress'] ?></td>
         <td><?php echo $row['phone'] ?></td>
         <td><?php echo $row['deptname'] ?></td>
         <td><?php echo $row['desname'] ?></td>
       </tr>
       <?php 
        }
      
    
  
  ?>
   
   
	   
</form>

</body>
</html>