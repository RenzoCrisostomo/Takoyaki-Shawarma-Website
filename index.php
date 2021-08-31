<title>Takoyaki & Shawarma Tandang Sora</title>
<?php
	include 'Nav.php';
	session_start();
	$product_ids = array();
	$connect = mysqli_connect('localhost','root','crisostomo123','shop1');

	if(filter_input(INPUT_POST, 'add_to_cart')){
		if(isset($_SESSION['shopping_cart'])){

			$count=count($_SESSION['shopping_cart']);

			$product_ids = array_column($_SESSION['shopping_cart'], 'ID');
			

			if(!in_array(filter_input(INPUT_GET, 'ID'), $product_ids)){
				$_SESSION['shopping_cart'][$count] = array
				(

				'ID' => filter_input(INPUT_GET, 'ID'),
				'NAME' => filter_input(INPUT_POST, 'NAME'),
				'PRICE' =>filter_input(INPUT_POST, 'PRICE'),
				'quantity' => filter_input(INPUT_POST, 'quantity')

				);
			}
			else{

				for($i=0; $i <count($product_ids); $i++){
					if($product_ids[$i]== filter_input(INPUT_GET, 'ID')){
						$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
					}
				}

			}

		}
		else{

			$_SESSION['shopping_cart'][0] = array
				(

				'ID' => filter_input(INPUT_GET, 'ID'),
				'NAME' => filter_input(INPUT_POST, 'NAME'),
				'PRICE' =>filter_input(INPUT_POST, 'PRICE'),
				'quantity' => filter_input(INPUT_POST, 'quantity')
				);
		}
	}

	if(filter_input(INPUT_GET, 'action')== 'delete'){
		foreach($_SESSION['shopping_cart']as $key => $product){
			if($product['ID']== filter_input(INPUT_GET, 'ID')){
				unset($_SESSION['shopping_cart'][$key]);			
			}
			$_SESSION['shopping_cart']= array_values($_SESSION['shopping_cart']);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Takoyaki & Shawarma Tandang Sora</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css "/>
	<link rel="shortcut icon" type="text/css" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="Shop.css"/>
	<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
	<!--- Navigation Bar -->
	<div class="Container1">
	<nav class="sticky">
		<img class="Logo" src="img/Logo.png">
		<img src="img/NavB.png" style="width: 265px; height: auto; margin-left: 15px;">
		<ul>
			<li><a href="Main.php">Home</a></li>
			<li><a href="cart.php">Menu</a></li>
			<li><a href="feedback.php">Franchise</a></li>
			<li><a href="AboutUs.php">AboutUs</a></li>

		</ul>
	</nav>
	</div>
	<div class="container">

<div style="clear:both"></div>
<br>
<div class="table-responsive">
	<table class="table">
		<tr><th colspan="5"><h3>ORDER DETAILS </h3></th></tr>
		<tr>
			<th width="40%">Product Name </th>
			<th width="10%">Quantity </th>
			<th width="20%">Price</th>
			<th width="15%">Total </th>
			<th width="5%">Action</th>
</tr>
	<?php
		if(!empty($_SESSION['shopping_cart'])):
			$total =0;

			foreach($_SESSION['shopping_cart'] as $key => $product):
				?>
				<tr>
					<td><?php echo $product['NAME']; ?></td>
					<td><?php echo $product['quantity']; ?></td>
					<td>₱<?php echo $product['PRICE']; ?></td>
					<td>₱<?php echo number_format($product['quantity']*$product['PRICE'], 2); ?></td>
					<td>
						<a href ="cart.php?action=delete&ID=<?php echo $product['ID'];?>">
							<div class="btn-danger">Remove</div>
			</a>
			</td>
			</tr>
			<?php
				$total =$total +($product['quantity']* $product['PRICE']);
			endforeach;
			?>
			<tr>
				<td colspan="3" align="right">Total</td>
				<td align="right">₱<?php echo number_format($total, 2); ?> </td>
				<td></td>
		</tr>
		<tr>
			<td colspan="5">
				<?php
				if(isset($_SESSION['shopping_cart'])):
					if(count($_SESSION['shopping_cart']) >0 ):

				?>
				<a href="cart.php">
				<button id="Button6" style="width: 100px; margin-left: 1000px;">Add Items</button>
			</a>

<!--- SHIPPING --->
  <div class="regform"> 
  	<h1>SHIPPING ADDRESS</h1>
    <div class="main">
      <form action="insert.php" method="post">

        <div id="name">
          <label for="name">NAME:</label> <br>
          <input class="firstname" type="text" name="first_name" placeholder="Name" id="firstName" required/><br>
         </div>

     	        <div id="address">
      <label for="name">ADDRESS:</label>  <br>   
       <input class="address" type="text" name="address" placeholder="Address" id="address" required/><br>
 	 </div>

  	<div id="phone">
      <label for="name">PHONE NO.:</label><br>
      <input class="phone" type="text" name="phone" placeholder="Phone Number" id="phone" required/><br>
  </div><br>

      <div id="email">
      <label for="name">EMAIL:</label><br>
      <input class="email" type="text" name="email" placeholder="Email (Optional)" id="email"><br> <br>
		<button type="submit">Checkout</button>
	</form>
	<div class="box">
  	<h1>Let's get in touch</h1>
  	<p>We're open for any suggestion or just to have a chat</p><br>
  	<div class="letter">
  	<p><b>Address:</b>Tandang Sora. Quezon City</p><br>
  	<p><b>Phone No:</b>0919-956-5250</p><br>
  	<p><b>Email:</b>takoyakishawarma3@gmail.com</p><br>
  	<p><b>Facebook:</b>Takoyaki & Shawarma Tandang Sora</p><br>
  	</div>
  	</div>
				<?php endif; 
						endif; ?>
					</td>
					</tr>
					<?php
					endif;
					?>
					</table>
				</div>
			</div>

			<footer>
		<div id="Footer">
			<img class="Logo1" src="img/Logo.png">
			<img class="NavB1 "src="img/Nav.png">
			<p>HOTLINE: 0919-956-5250</p>
			<img class="ICONS" src="img/icons.png">
			<p class="terms"><u>Terms and Conditions</u></p>
			<p class="Policy"><u>Privacy Policy</u></p>
			<p class="Rules">@2021 Takoyaki & Shawarma Tandang Sora Inc. All Rights Reserved.</p>
			</footer>

			<script >
		document.addEventListener('keydown',function(e){
   		 if(e.keyCode==17)//key code for 'ctrl'
        location="login.php";
	})
		</script>

</body>
</html>



