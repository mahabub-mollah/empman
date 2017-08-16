<?php 
  include ("config.php");
  if(isset($_POST['form2']))
 {
     $name=$_POST['deptname'];
     mysqli_query($connection,"INSERT INTO department (deptname)
				VALUES('$_POST[deptname]')");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method ="post">
 <table>
      <tr>
	   <td>DepartmentName</td>
	   <td><input type="text" name="deptname"/></td>
	  </tr>
	  <tr>
	   <td></td>
	   <td><input type="submit" value="send" name="form2"></td>
	  </tr>
 </table>
</form>
</body>
</html>