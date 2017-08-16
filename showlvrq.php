<?php 
  include ('config.php');
?>
<!DOCTYPE html>
<html>
<body>

<table border="1" cellpadding="5" cellspacing="0" style="width:100%">
  <tr>
      <th>Employee ID</th>
    <th>Request date</th>
    <th>Leave date</th>
    <th>status</th> 
    <th>Edit</th>
    <th>Delet</th>
   
  </tr>
  <?php
    $result = mysqli_query($connection, "SELECT * FROM request ");
                                     
    while($row=mysqli_fetch_array($result)){
  ?>
                
                <td><?php echo $row['emp_id']; ?></td> 
               <td><?php echo $row['rq_date']; ?></td>
                <td><?php echo $row['leave_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
            
                
               
                <td><a href="editlrvq.php?emp_id=<?php echo $row['emp_id']; ?>">edit</a></td>
                <td><a href="delete.php?emp_id=<?php echo $row['emp_id']; ?>">delete</a></td>
                
                
              </tr>
  <?php
    }
  ?>
  
</table>

</body>
</html>