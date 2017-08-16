<?php 
  include ("config.php");
  if(isset($_POST['submit']))
 {

 	        
             $lv_id=$_POST['lv_id'];
 	        $emp_id=$_POST['emp_id'];
            $reason=$_POST['reason'];
 	        $status=$_POST['g'];
 	        $leavedate=$_POST['lvdate'];
 	
 	
     mysqli_query($connection,"INSERT INTO  lvrq (emp_id ,reason,status,lv_date)
				VALUES('$_POST[emp_id]','$_POST[reason]','$_POST[g]','$_POST[lvdate]')");
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
	   <td><input type="hidden" name="lv_id" /></td>
	</tr>
    <tr>
	     <td>employee ID</td> 
	    <td> <select name="emp_id" multiple="multiple">
        <option value="">Select employeeid </option>
         <?php
          $value1 = mysqli_query($connection,"SELECT emplo_yee.emp_id, emplo_yee.name FROM emplo_yee");
          while($row = mysqli_fetch_assoc($value1))
          {
        //print_r($row);
         ?>
          <option value="<?php echo $row["emp_id"]; ?>"><?php echo "(".$row["emp_id"].") ".$row["name"]; ?></option>
      <?php
       }
       ?>
                </select></td>


                <br><br> 
	</tr>
    
    
	<tr>
	   <td>Reason</td>
	  <td><textarea rows="4" cols="50" name ="reason"></textarea></td>
      </textarea>
	</tr>
	<tr>
	       <td></td>
		 <td>status: Pending:<input type="radio" name="g" value="pending"></td>
          <td> Accepted: <input type="radio" name="g" value="accepted"></td>           
               
                <br><br>
	</tr>
	 

	<tr>
	   <td>Leave Date</td>
	   <td><input type="date" name="lvdate" /></td>
	</tr>
	
	

	

	<tr>

    <td><input type="submit" value="send" name="submit"></td>
	</tr>
	</table>
</body>
</html>