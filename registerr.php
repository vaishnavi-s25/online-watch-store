<?php
 $con=mysqli_connect('localhost','root','','epress');
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $addr=$_POST['addr'];

 $phno=$_POST['phno'];
 
 $sql="INSERT INTO `account`(`email`, `name`, `addr`, `pass`, `phno`) VALUES ('$email','$name','$addr','$password','$phno')";
 $rs = mysqli_query($con, $sql);
$sq="SELECT * FROM `account`";
$r= mysqli_query($con, $sq);
$numrows = mysqli_num_rows($r);
$numrows=$numrows+1;
$s="INSERT INTO `mycart`(`cid`, `email`) VALUES ('$numrows','$email')";
$result= mysqli_query($con, $s);
if($result)
{
  echo '<script> alert("Registered successfully") </script>';
  echo "<script> location.href='sign.html'; </script>";
        exit;
}
?>