<?php 
   include ("config.php");
   $emp_id =$_GET['emp_id'];
   delete_student($emp_id);
   function delete_student($emp_id)
   {
   	global $connection;
   	//echo "DELETE FROM emplo_yee,WHERE emp_id= $emp_id";
   	   $value = mysqli_query($connection,"DELETE FROM emplo_yee WHERE emp_id= $emp_id");
   		if ( $value==true) {
   			header("Loation:join.php");
   		}
         else{
            echo "can not delete";
         }

   }
   ?>
   	
   