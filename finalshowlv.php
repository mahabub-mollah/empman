<?php 
  include ('config.php');
?>
<!DOCTYPE html>
<html>
<body>

<table border="1" cellpadding="5" cellspacing="0" style="width:100%">
  <tr>
        <th>LeaverequestID</th>
        <th>Employeeid</th>
        <th>Employeename</th>
        <th>Reason</th>
        <th>Status</th>
        <th>LeaveDate</th>
        <th>Edit</th>
        <th>Delet</th>
   
  </tr>
  <?php
    $result = mysqli_query($connection, "SELECT lvrq.lv_id, lvrq.emp_id,lvrq.reason,lvrq.status,lvrq.lv_date,emplo_yee.name from lvrq INNER JOIN emplo_yee ON lvrq.emp_id = emplo_yee.emp_id");
                 ;
                                     
    while($row=mysqli_fetch_array($result)){

  ?>
                <td><?php echo $row['lv_id']; ?></td>
                <td><?php echo $row['emp_id']; ?></td>
                 <td><?php echo $row['name']; ?></td> 
                <td><?php echo $row['reason']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['lv_date']; ?></td>
               
            
                
               
                <td><a href="editlrvq.php?lv_id=<?php echo $row['lv_id']; ?>">edit</a></td>
                <td><a href="delete.php?emp_id=<?php echo $row['emp_id']; ?>">delete</a></td>
                
                
              </tr>
  <?php
    }
  ?>
  
</table>

</body>
</html>