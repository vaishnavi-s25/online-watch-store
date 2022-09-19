<?php
$conn=new mysqli('localhost','root','','epress');



if($_SERVER['REQUEST_METHOD']=="POST"){

    $ProName= $_POST["ProName"];

    $email= $_POST["email"];
    $sql="DELETE FROM `cart` WHERE `ProName`='$ProName' AND `email`='$email'";

$result=mysqli_query($conn,$sql);
echo"<script>alert('Removed');
</script>";
}  
?>
