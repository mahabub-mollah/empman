<?php 
  include ("config.php");
    if(isset($_POST['submit']) && $_FILES['file']['name']){
    $file = time()."_".$_FILES['file']['name'];
    $emp_id=$_POST['emp_id'];
    if(move_uploaded_file($_FILES['file']['tmp_name'], 'file/'.$file)==true){
      $msg = "File Uploade successfully...";
    }
    mysqli_query($connection, "INSERT INTO file(file_path, emp_id) VALUES('$file',$emp_id)");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <tr>
        <tr>
          <td></td>
          <td><input type="hidden" name="file_id"></td>
        </tr>
         <td>employee ID</td> 
        <td> <select name="emp_id" multiple="multiple">
        <option value="">Select employeeid </option>
         <?php
          $value1 = mysqli_query($connection,"SELECT emplo_yee.emp_id,emplo_yee.name FROM emplo_yee");
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
        <td> Select file to upload:</td>
                
            <td>
                <input type="file" name="file">
            </td>
    </tr>
    <tr>
        
                
            <td>
                <input type="submit" name="submit" value="submit">
            </td>
    </tr>
        
    
    </form>

</body>
</html>