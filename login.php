<?php
 $con=mysqli_connect('localhost','root','','epress');
 
 $email=$_POST['email'];
 $password=$_POST['password'];

 $sql="SELECT * FROM `account` WHERE email='$email' AND pass='$password'";
 $rs=mysqli_query($con,$sql);
 $numrows=mysqli_num_rows($rs);
 if($numrows>0)
 {
	 $s="INSERT INTO `online`(`email`) VALUES ('$email')";
	 $res=mysqli_query($con,$s);
	 
	 echo "<script> location.href='homepage.html'; </script>";
	 exit;
 }
 else
 {
	 echo " <script> alert ('WRONG CREDENTIALS')</script>";
	 
	 	 echo "<script> location.href='sign.html'; </script>";
          exit;
 }
   
 ?>