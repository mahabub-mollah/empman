<?php 
  include ("config.php");
  if(isset($_POST['form6']))
 {
 	 $employeeid=$_POST['emp_id'];
 	 $requestdate=$_POST['rqdate'];
 	 $leavedate=$_POST['lvdate'];
 	 $status=$_POST['status'];
 	
     mysqli_query($connection,"INSERT INTO request(emp_id ,rq_date,leave_date,status)
				VALUES('$_POST[emp_id]','$_POST[rqdate]','$_POST[lvdate]','$_POST[status]')");
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
	     <td>employee ID</td> 
	    <td> <select name="emp_id" multiple="multiple">
        <option value="">Select employeeid </option>
         <?php
          $value1 = mysqli_query($connection,"SELECT emplo_yee.emp_id FROM emplo_yee");
          while($row = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $row["emp_id"]; ?>"><?php echo "(".$row["emp_id"]; ?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
    
    <tr>
	   <td>Request Date</td>
	   <td><input type="date" name="rqdate"/></td>
	</tr>
	<tr>
	   <td>Status</td>
	  <textarea rows="4" cols="50" name ="status">
      </textarea>
	</tr>

	<tr>
	   <td>Leave Date</td>
	   <td><input type="date" name="lvdate" /></td>
	</tr>
	
	

	

	<tr>

    <td><input type="submit" value="send" name="form6"></td>
	</tr>
	</table>
</body>
</html>