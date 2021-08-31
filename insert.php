	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Takoyaki & Shawarma Tandang Sora</title>
	<link rel="shortcut icon" type="text/css" href="img/logo.png">
<?php
session_start();

$mysqli = new mysqli("localhost","root","crisostomo123","shop1");

if ($mysqli === false) {

	die("Error: Could not connect".$mysqli->connect_error);
}
$first_name = $mysqli->real_escape_string($_POST['first_name']);
$address = $mysqli->real_escape_string($_POST['address']);
$phone = $mysqli->real_escape_string($_POST['phone']);
$email = $mysqli->real_escape_string($_POST['email']);
$orders = json_encode($_SESSION['shopping_cart']);
$sql = "INSERT INTO shipping_address (first_name,address,phone,email,orders)
	VALUES('$first_name','$address','$phone','$email','$orders')";


if($mysqli->query($sql)=== true){
	  echo "<script>

            alert('SUCCESFULLY PURCHASED');
            window.location.href='Main.php';

            </script>";
}
else{
	echo "Error: Could not able to execute $sql".$mysqli->error;
}

$mysqli->close();




?>