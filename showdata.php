<?php 
  include ('config.php');
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
    <th>Edit</th>
    <th>Delet</th>
   
  </tr>
  <?php
    $value = mysqli_query($connection, "SELECT * from emplo_yee");
    while($row=mysqli_fetch_array($value)){
  ?>
                 
                <img src="images/<?php echo $row['photo']; ?>" alt="" />
                <td><a href="newedit.php"><?php echo $row['name']; ?></a></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><a href="edit.php?emp_id=<?php echo $row['emp_id']; ?>">edit</a></td>
                <td><a href="delete.php?emp_id=<?php echo $row['emp_id']; ?>">delete</a></td>
                
                
              </tr>
  <?php
    }
  ?>
  
</table>

</body>
</html>
