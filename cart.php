<title>Takoyaki & Shawarma Tandang Sora</title>
<?php
	include 'Nav.php';
	session_start();
	$product_ids = array();
	if(filter_input(INPUT_POST, 'add_to_cart')){
		if (isset($_SESSION['shopping_cart'])) {
			$count = count($_SESSION['shopping_cart']);

			$product_ids = array_column($_SESSION['shopping_cart'], 'ID');

			if(!in_array(filter_input(INPUT_GET, 'ID'),$product_ids)){


				$_SESSION['shopping_cart'][$count] = array
			(
				'ID'=>filter_input(INPUT_GET, 'ID'),
				'NAME'=>filter_input(INPUT_POST, 'NAME'),
				'PRICE'=>filter_input(INPUT_POST, 'PRICE'),
				'quantity'=>filter_input(INPUT_POST, 'quantity')
			);

			}
			else{
				for ($i=0; $i < count($product_ids); $i++) { 
					if ($product_ids[$i] == filter_input(INPUT_GET, 'ID')) {

						$_SESSION['shopping_cart'][$i]['quantity']+= filter_input(INPUT_POST, 'quantity');					
					}
				}
			}		
		}
		else
		{
			$_SESSION['shopping_cart'][0] = array
			(
				'ID'=>filter_input(INPUT_GET, 'ID'),
				'NAME'=>filter_input(INPUT_POST, 'NAME'),
				'PRICE'=>filter_input(INPUT_POST, 'PRICE'),
				'quantity'=>filter_input(INPUT_POST, 'quantity')
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
	<link rel="stylesheet" type="text/css" href="Shop.css" />
	<link rel="stylesheet"  href="cart1.css"/>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://kit.fontawesome.com/d75cefc660.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="Container1">
	<nav class="sticky">
		<img class="Logo" src="img/Logo.png">
		<img src="img/NavB.png" style="width: 265px; height: auto; margin-left: 15px;">
		<ul>
			<li><a href="Main.php">Home</a></li>
			<li><a href="cart.php">Menu</a></li>
			<li><a href="feedback.php">Franchise</a></li>
			<li><a href="AboutUs.php">AboutUs</a></li>
			<li><a href="index.php"><i class="fas fa-shopping-cart" style="font-size: 30px;"></i></a></li>
		</ul>
	</nav>
	</div>

	<div class="container">
		<h1>MENU</h1>
		<?php 

			$connect = mysqli_connect('localhost', 'root', 'crisostomo123', 'shop1');
			$query ='SELECT * FROM product ORDER by ID ASC';
			$result =mysqli_query($connect, $query);

			if($result):
				if(mysqli_num_rows($result)>0):
					while($product = mysqli_fetch_assoc($result)):
					
						?>
						 <div class="col-sm-4 col-md-3">
						 	<form method="post" action="index.php?action=add&ID=<?php echo $product['ID'];?>">

						 		<div class="products">

						 			<img src="<?php echo $product['IMAGE']; ?> "class="img-responsive" />
						 			<h4 class="test-info"><?php echo $product['NAME']; ?></h4>
						 			<h4 >₱<?php echo $product['PRICE']; ?></h4>
						 			<input type="text" name="quantity" class="form-control" value="1" />
						 			<input type="hidden" name="NAME" value="<?php echo $product['NAME']; ?>"/>
						 			<input type="hidden" name="PRICE" value="<?php echo $product['PRICE']; ?>"/>
						 			<input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-info"
						 					value="Add to Cart" />

						 		</div>
						 	</form>
						 </div>
						<?php

					endwhile;
				endif;
			endif;
		?>
		<div style="clear:both"></div>
<br>
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











