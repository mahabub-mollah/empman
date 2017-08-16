<?php
include ("config.php");

?>

<!DOCTYPE html>
<html>
<body>

<table border="1" cellpadding="5" cellspacing="0" style="width:100%">
  <tr>
    <th>photo</th>
    <th>name</th>
    <th>email</th> 
    <th>adress</th>
    <th>phone</th>
    <th>departmentname</th>
    <th>designation</th>
    <th>Edit</th>
    <th>Delet</th>
    
    
   
  </tr>
  <?php
    $value = mysqli_query($connection,"SELECT * FROM ((emplo_yee  INNER JOIN department ON emplo_yee.dept_id = department.dept_id)
                 INNER JOIN designation ON emplo_yee.des_id = designation.des_id)");
    
    while($row=mysqli_fetch_array($value)){
  ?>
              <tr>
                <td><img src="images/<?php echo $row['photo']; ?>" alt="" /></td>
                <td></a><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['deptname']; ?></td>
                <td><?php echo $row['desname']; ?></td>
                 <td><a href="newedit.php?emp_id=<?php echo $row['emp_id']; ?>">edit</a></td>
                <td><a href="delete.php?emp_id=<?php echo $row['emp_id']; ?>">delete</a></td>
                
              </tr>
  <?php
    }
  ?>
  
</table>

</body>
</html>
