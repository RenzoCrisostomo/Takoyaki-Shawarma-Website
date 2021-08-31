<!DOCTYPE html>
<html>
<head>
	<title>Takoyaki & Shawarma Tandang Sora</title>
	<link rel="shortcut icon" type="text/css" href="img/Logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/d75cefc660.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<h1 class="h1">TAKOYAKI & SHAWARMA </h1>
		<h1 class="H">TANDANG SORA </h1>
	<div class="button">
			<a href="Main.php" class="btn">HOME</a>
			<a href="#" class="btn1" id="button1">LOG IN</a>
		</div>

	<div  class="popup">
		<div class="popup1">
			<i class="far fa-times-circle"></i>
			<div class="header">LOG IN FORM</div><BR>
			<HR>
			<form action="verify.php" method="POST">
			<i class="fas fa-user" style="font-size: 30px; padding: left;"></i><input type="text" name="username" id="username" placeholder="Username" required></input>
			<i class="fas fa-lock"  style="font-size: 30px; text-align: left; "></i><input type="password" name="password" id="password" placeholder="Password" required></input><br>
			<a href="Sample.php"><button class="buton" type="submit"> Login</button></a>
			</form>
		</div>
		
	</div>	
		

</script>
	 <script>
		document.getElementById("button1").addEventListener("click", function(){
			document.querySelector(".popup").style.display = "flex";
		})
		document.querySelector(".fa-times-circle").addEventListener("click", function(){
		document.querySelector(".popup").style.display = "none";
		})
	</script> 


</body>	
</html>