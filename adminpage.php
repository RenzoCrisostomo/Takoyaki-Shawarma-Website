	
<!DOCTYPE html>
<html>
<head>
	<title>Takoyaki & Shawarma Tandang Sora</title>
	<link rel="shortcut icon" type="text/css" href="img/logo.png">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
		.table1{
				border: 1px solid black;
				padding-left: 30px;

			}
		.table1 th {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		} 	
		.table1 td{
			text-align: center;
			border: 1px solid black;
		}

	</style>

<center>
	<h1>ADMIN PAGE</h1>
</center>


<?php

	session_start();
	
$mysqli = new mysqli("localhost", "root", "crisostomo123", "shop1");

if($mysqli === false){
die("ERROR: Could not connect. " . $mysqli->connect_error);
}


$sql = "SELECT * FROM shipping_address";

if($result = $mysqli->query($sql)){
if($result->num_rows > 0){


echo '<div class="container">';
echo '<table class="table table-hover">';
echo "<thead>";
echo "<tr>";
echo "<th>FirstName</th>";
echo "<th>Address</th>";
echo "<th>Phone</th>";
echo "<th>Email</th>";
echo "<th>Order</th>";
echo "</tr>";
echo "</thead>";
echo "</div>";
while($row = $result->fetch_array()){
echo "<tr>";

echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>";  

$orders = json_decode($row['orders'], true);

echo '<table class="table1">';
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "<th>Quantity</th>";


for($i=0; $i<count($orders); $i++)

{
	$order=$orders[$i];

	echo "<tr>";
	echo "<td>".$order['ID'] ."</td>";
	echo "<td>".$order['NAME'] ."</td>";
	echo "<td>".$order['PRICE'] ."</td>";
	echo "<td>".$order['quantity'] ."</td>";
	echo "</tr>";
}

echo "</table>";

echo "</td>";



echo "</tr>"; }
echo "</table>";
$result->free();
}
else{
echo "No records matching your query were found.";
}
}
else{
echo "ERROR: Could not able to execute $sql. " . $mysqli->error;

}
$mysqli->close();
?>

<div class="d-grid gap-2 d-md-block">
	<a href="Main.php">
  <button class="btn btn-primary" type="button" >LOGOUT</button>
  </a>
</div>





</body>
</html>