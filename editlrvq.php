<?php 
include ("config.php");
  
 
   

  
      
       

   
 ?>
 <?php
    if (isset($_POST['update'])) {
            $lv_id= $_POST['lv_id'];
            $emp_id=$_POST['emp_id'];
            $reason=$_POST['reason'];
           $status=$_POST['g'];
          $leavedate=$_POST['lvdate'];
 
    // echo "UPDATE emplo_yee SET name='$name',email='$email',adress='$adress',phone='$phone',photo='$path',dept_id='$dept_id',des_id='$des_id' WHERE emp_id='$eemployeeid'";
     $res = mysqli_query($connection,"UPDATE lvrq SET emp_id='$emp_id',reason='$reason',status='$status',lv_date='$leavedate' WHERE lv_id='$lv_id'");
      //echo '<pre>';
      //print_r($data);
     //$row = mysqli_fetch_assoc($res);
      
    }

     if(isset($_GET['lv_id'])){
      $lv_id =$_GET['lv_id'];
       
      
      $res = mysqli_query($connection,"SELECT * FROM lvrq where lv_id='$lv_id'");
      $value1 = mysqli_query($connection,"SELECT emplo_yee.emp_id,emplo_yee.name FROM emplo_yee");


      $row = mysqli_fetch_assoc($res);

      //print_r();

       $o_emp_id = $row['emp_id'];
    

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
     <td><input type="hidden" name="lv_id" value="<?php echo $row['lv_id'];?>"/></td>
  </tr>
             <br><br> 
  <tr>
        
         <td>employee ID</td> 
        <td> <select name="emp_id">
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
     <td>reason</td>
      <td><textarea rows="4" cols="50" name ="reason"><?php echo $row["reason"];?></textarea></td>
  </tr>
  <tr>
         <td></td>
          <td>status: Pending:<input type="radio" name="g" value="pending" <?php if('pending' == $row['status']) echo 'checked="checked"'; ?>></td>
          <td> Accepted: <input type="radio" name="g" value="accepted" <?php if('accepted' == $row['status']) echo 'checked="checked"'; ?>></td>           
               
                <br><br>
  </tr>
    
    
  <tr>
     <td>Leave Date</td>
     <td><input type="date" name="lvdate" value="<?php echo $row["lv_date"];?>" /></td>
  </tr>
  <tr>

    <td><input type="submit" value="update" name="update"></td>
  </tr>
  </table>
</body>
</html>