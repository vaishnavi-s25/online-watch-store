<?php

$con = mysqli_connect('localhost', 'root', '','epress');
$pname=$_POST['product'];
$quan=$_POST['quantity'];
$price=$_POST['price'];

$total_p=$price*$quan;
$rw="SELECT cid, online.email FROM mycart, online WHERE mycart.email = online.email";
$result=mysqli_query($con, $rw);
$row=mysqli_fetch_row($result);
$cid=$row[0];
$email=$row[1];

$sql="INSERT INTO `cart`(`cid`, `email`, `ProName`, `quantity`, `total_price`) VALUES ('$cid','$email','$pname','$quan','$total_p')";
$rs = mysqli_query($con, $sql);


if($rs)
{
  echo '<script> alert("added to cart") </script>';
  echo "<script> location.href='Mycart.php'; </script>";
        exit;
}

?>