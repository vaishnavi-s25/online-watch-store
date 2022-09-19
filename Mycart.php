<?php
     
	$con = mysqli_connect('localhost', 'root', '','epress');
	
   	$sql="SELECT cart.ProName, cart.total_price,cart.quantity,online.email FROM cart,online WHERE cart.email=online.email";
        $result=mysqli_query($con, $sql);
	$row=mysqli_fetch_row($result);
				
				
             ?>
<html>

<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<title>Index Page</title>
<link rel="stylesheet" href="indexcss.css">
   <link rel="stylesheet" href="abhi.css">
  

<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  
  background-image: url("b10.jpg");
  background-size: 1600px;
  background-position:center;
}
div {
	text-align: center;
	padding: 100px 350px;
}
h1{
	
}


input[type=text], select {
  width: 100%;
  padding: 20px 30px;
  margin: 8px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 50%;
  padding: 20px 10px;
  margin: 8px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
}
input[type=submit]:hover {
  background-color: #45a049;
}
table{
	 border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}



.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #000000;
    color: #ffffff;
    text-align: left;
	font-family: "Poppins", sans-serif;
	font-size: 20px;

}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
	
	

}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
	font-size: 17px;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #4d84e2;
}
.btn {
  width: 150px;
  background-color: #000000; /*button color*/
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color: #4d84e2;
}
input[type=submit], input[type=reset] {
  background-color: #000000;
  align : center;
  border: none;
  
  padding: 16px 32px;
  text-decoration: none
  margin: 4px 2px;
  cursor: pointer;
} 
</style>

<body>

<section>
    <div class="top">
	 <h1> &nbsp</h1>
	<ul class="toplist">
 <li><a href="homepage.html"><b>Home</b></a></li>
                <li><a href="bucard.html"><b> Branded Watch</b></a></li>
            
                
				<li><a href="logout.php"><b>LogOut</b></a></li>
</div>
	   </section>
<div>
<h2>Products of Your Cart</h2><br><br>

                


       
				
				<table class="styled-table">
				
				<thead><tr><th>Product&nbspName</th><th>Total&nbspPrice</th><th>Quantity&nbsp</th><th>Order</th><th>Remove</th></tr></thead>
				<?php  
				
				if(mysqli_num_rows($result)>0)
				{
					
					while($row=mysqli_fetch_row($result))
					{
					
						$pname=$row[0];
						$totalprice=$row[1];
				        $quan=$row[2];
	                   
						?>
						<form action ="remove.php" method="post">
			        <tr>
					<td><input type="text" name="pname" value="<?=$pname?>"></td>
					<td><input type="text" name="totalprice" value="<?=$totalprice?>"></td>
					<td><input type="text" name="quantity" value="<?=$quan?>"></td>
          
					 <td><button type = "submit" class = "btn solid"> place order </button></td>
          <form action="r" method="post">
          <td><button type = "submit" class = "btn solid">Remove</button></td>
          </form>  
	            		 	
				<?php	
					}
				}
				?>
				
				</form>
		
	<a href="homepage.html"><input type="button" value="Home" class="btn solid"></a>	
	
</div>

</body>
</html>