<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Takoyaki & Shawarma Tandang Sora</title>
	<link rel="stylesheet" href="feedback.css">
	<link rel="shortcut icon" type="text/css" href="img/logo.png">
	<script src="https://kit.fontawesome.com/d75cefc660.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<!--- Navigation Bar -->
	<div class="Container0">
		<nav class="sticky">
			<img class="Logo" src="img/Logo.png">
			<img class="NavB "src="img/NavB.png" style="width: 270px; height: auto; margin-left: 15px;">
			<ul>
				<li><a href="Main.php">Home</a></li>
				<li><a href="cart.php">Menu</a></li>
				<li><a href="feedback.php">Franchise</a></li>
				<li><a href="AboutUs.php">AboutUs</a></li>
			</ul>
		</nav>	
		</div>

			<!--- Registration Form -->
		<div  class="popup">
		<div class="popup1">
			<i class="far fa-times-circle"></i>
			<div class="head">FILL OUT THE FORM TO LEARN MORE ABOUT THE TAKOYAKI & SHAWARMA TANDANG SORA FRANCHISE OPPORTUNITY.</div>
			<hr style=" background-color: black;">
			<form>
				<div>
				<label for="fname">First Name:</label><br>
				<input type="text" id="fname" name="fname" >
				</div>

				<div class="lname">
				<label for="lname">Last Name:</label><br>
				<input type="text" id="lname" name="lname">
				</div>

				<br>
				<div class="phone">
				<label for="phone">Phone:</label><br>
				<input type="text" id="phone" name="lname">
				</div>

				<br>
				<div class="phone">
				<label for="lname">Email:</label><br>
				<input type="text" id="phone" name="lname">
				</div>

				<br>
				<div class="phone">
				<label for="lname">Street:</label><br>
				<input type="text" id="phone" name="lname">
				</div>

				<br>
				<div class="phone">
				<label for="lname">City:</label><br>
				<input type="text" id="City" name="lname">
				</div>

				<br>
				<div class="Province">
				<label for="lname">Province:</label><br>
				<input type="text" id="Province" name="lname">
				</div>

				<br>
				<div class="Zip">
				<label for="lname">Zip:</label><br>
				<input type="text" id="Zip" name="lname">
				</div>

				<br>
				<div class="check">
				<label for="check">Consent:</label><br>
				<input type="checkbox" style="margin-left: -370px;">
				<p>
					You authorize Takoyaki & Shawarma's and its affiliates (and each of their service providers and/or agents) to contact you about franchise opportunities and for other advertising, marketing, and promotional purposes by giving your information and checking the box above. You expressly agree to receive non-emergency, automated, autodialed, prerecorded, or other telemarketing phone calls or under the Telephone Consumer Protection Act, or SMS messages (TCPA). You understand that these calls or text messages may be made using an automatic telephone dialing system and/or prerecorded messages, that standard message and data rates may apply, and that you have the right to withdraw your consent at any time by replying "STOP" to a text message or by making a request if you are called. You also agree to receive emails at the above-mentioned address, and you understand that you can withdraw your agreement at any time by clicking the unsubscribe link in such emails or otherwise responding as directed in such communications. You are not necessary to consent to these emails in order to become a Takoyaki & Shawarma's franchisee, and you may request more information about Takoyaki & Shawarma'sfranchising by calling (0919)-956-5250.
				</p>
				<br>
				</div>
				<div class="submit">
				<input type="submit" value="Submit">
			</div>	

			</form>
		</div>
		</div>


			<!--- Section 1  TITLE OR HEADER---->
		<div id="Section1">
			<h1>BE PART OF OUR TEAM</h1>
		</div>

		<div id="Section2">	
			<div class="pic">
			<img src="img/pic8.png">
			</div>

			<p>
				Since 2020, when we first opened our doors on Carnation St. Torres Subd. Banlat Rd. Tandang Sora. Quezon City, people have been yearning Takoyaki & Shawarma. There was only one takoyaki, The Regular Tokayaki, and it was this meal that made us famous. Our devoted admirers aren't the only ones who are raving about us these days. Now, with bold new menu items and a fresh new style, we're ready to wow a whole new generation of diners. When you combine our Japanese-sized sales with numerous dayparts with committed franchise owners who aren't afraid to stand out, you have a winner — you have Takoyaki & Shawarma.
				<bR>
				<br>
				IF YOU’RE READY TO MAKE YOUR MOVE, COME TO THE PLACE WHERE THE ‘TAKOYAKI & SHAWARMA TANDANG SORA LIMIT.
			</p>

				<div class="button">
					<a href="#" class="btn1" id="button1">GET STARTED</a>
					<a href="Sample.php" class="btn2">BRAND POWER</a>
				</div>

					<!--- Footer -->
		</div>
		<div id="Footer">
				<img class="Logo1" src="img/Logo.png">
				<img class="NavB1 "src="img/Nav.png">
				<p>HOTLINE: 0919-956-5250</p>
				<img class="ICONS" src="img/icons.png">
				<p class="terms"><u>Terms and Conditions</u></p>
				<p class="Policy"><u>Privacy Policy</u></p>
				<p class="Rules">@2021 Takoyaki & Shawarma Tandang Sora Inc. All Rights Reserved.</p>
			</div>


					<!--- Get Started Button -->
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