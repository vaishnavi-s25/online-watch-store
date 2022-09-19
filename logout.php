<?php
 $con=mysqli_connect('localhost','root','','epress');
 $sql="DELETE FROM `online`";
 $rs=mysqli_query($con,$sql);
 if ($rs)
   {
	   
	   echo "<script> location.href= 'index.html';</script>";
	   exit;  
   }
   
 ?>