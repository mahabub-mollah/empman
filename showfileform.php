<?php 
  include ('config.php');
?>
<!DOCTYPE html>
<html>
<body>

<table border="1" cellpadding="5" cellspacing="0" style="width:100%">
  <tr>
    <th>Employee ID</th>
     <th>file ID</th>
    <th>Employee name</th>
    <th>Filepath </th>
    <th>Edit</th>
    <th>Delet</th>
   
  </tr>
  <?php
    $result = mysqli_query($connection, "SELECT file.file_path,file.emp_id,file.file_id,emplo_yee.name FROM file INNER JOIN emplo_yee Where file.emp_id = emplo_yee.emp_id");
                                     
    while($row=mysqli_fetch_array($result)){
  ?>
                <td><?php echo $row['emp_id']; ?></td> 
                 <td><?php echo $row['file_id']; ?></td> 
                 <td><?php echo $row['name']; ?></td> 
               <td><img src="images/<?php echo $row['file_path']; ?>" alt="" /></td>
                
            
                
               
                <td><a href="editfile.php?file_id=<?php echo $row['file_id']; ?>">edit</a></td>
                <td><a href="delete.php?emp_id=<?php echo $row['emp_id']; ?>">delete</a></td>
                
                
              </tr>
  <?php
    }
  ?>
  
</table>

</body>
</html>