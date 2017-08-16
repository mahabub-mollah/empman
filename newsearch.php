<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<form action="" method="POST">

		<select name="dept_id" style="margin-top: 26px; margin-left: 10px">
			<option value="">Department</option>
				<?php 
				$value1 = mysqli_query($connection,"SELECT * FROM department");
		
					while($rows = mysqli_fetch_array($value1)){
						echo "(".$rows['dept_id'].")".$rows['deptname'];
				?>
						<option value="<?php echo $rows['dept_id']; ?>"><?php echo "(".$rows['dept_id'].")".$rows['deptname'];?></option>
				<?php
						}
				?>
		</select>&nbsp;&nbsp;&nbsp;or

		<select name="des_id" style="margin-top: 26px; margin-left: 10px">
			<option value="">Designation</option>
				<?php 
				  $value2 = mysqli_query($connection,"SELECT * FROM designation");
					while($rows = mysqli_fetch_array($value2)){
				?>
						<option value="<?php echo $rows['des_id']; ?>"><?php echo "(".$rows['des_id'].")".$rows['desname'];?></option>
				<?php
						}
				?>
		</select>
		<input type="submit" name="search" value="Show">
	</form>
<?php 
		//Search by department or designation...
		if(isset($_POST['search'])){

			if($_POST['dept_id'] == NULL && $_POST['des_id'] == NULL){
				echo "choose department or designation";
			}
			if($_POST['dept_id'] != NULL && $_POST['des_id'] != NULL){
				echo "select just one option";
			}

			if($_POST['dept_id'] != NULL && $_POST['des_id'] == NULL){
				$dept_id = $_POST['dept_id'];
	      ?>
				<h2 style="clear: both;"><?php echo"Search by department". $dept_id; ?></h2>
					<table border="1" cellpadding="5" cellspacing="0" style="clear: both;">
						<tr>
							
							<th>Photo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone</th>
							
							<th>Department</th>
							<th>Designation</th>
						</tr>
						<?php
				  $value = mysqli_query($connection, "SELECT * FROM  emplo_yee LEFT JOIN department ON emplo_yee.dept_id = department.dept_id  LEFT JOIN designation ON emplo_yee.des_id = designation.des_id where emplo_yee.dept_id= '$dept_id'");
				while($dep_list_row = mysqli_fetch_array($value)){
					
					?>
						<tr>
						   
						    <td><?php echo $dep_list_row['photo']; ?></td>
							
							<td><?php echo $dep_list_row['name']; ?></td>
							<td><?php echo $dep_list_row['email']; ?></td>
							<td><?php echo $dep_list_row['adress']; ?></td>
							<td><?php echo $dep_list_row['phone']; ?></td>
							<td><?php echo $dep_list_row['deptname'] ?></td>
                             <td><?php echo $dep_list_row['desname'] ?></td>
								
								<?php
									}
								}
				if($_POST['des_id'] != NULL && $_POST['dept_id'] == NULL){

                  $des_id= $_POST['des_id'];

                
                    
			     ?>
			       <h2 style="clear: both;"><?php echo"Search by designation". $des_id; ?></h2>
				<table border="1" cellpadding="5" cellspacing="0" style="clear: both;">
						<tr>
							
						<th>Photo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone</th>
						    <th>Department</th>
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
    }
      
     }
  
  ?>





<body>

</body>
</html>