<?php 
  include ("config.php");
  if(isset($_POST['form3']))
 {
     $name=$_POST['desname'];
     $res_dept= mysqli_query($connection,"INSERT INTO designation (desname)
				VALUES('$_POST[desname]')");
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
	   <td>DesignationName</td>
	   <td><input type="text" name="desname"/></td>
	  </tr>
	  <tr>
	   <td></td>
	   <td><input type="submit" value="send" name="form3"></td>
	  </tr>
 </table>
</form>
</body>
</html>