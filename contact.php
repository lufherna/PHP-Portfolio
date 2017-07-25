<!DOCTYPE html>

<html>

	<head>
		<title>Contact Me</title>
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style2.css">
	</head>

	<body>

	<?php require './header.php' ?>
	


		<div class="aboutMe1">
			<h1 class="contactMe">Contact</h1>

			<hr class="hr2">

			<form>
  				<p class="p1"> Name:
  					<br>
  					<input class="Name" type="text" name="Name" placeholder="John Smith"></p>
  	
  				<p>Email:
  					
  					<input class="Email" type="text" name="Email" placeholder="something@gmail.com"></p>
  					
  				Message:
  					
  					<textarea class="Message" type="text" name="Message"></textarea>

  					<br><br>
  				<button class="button" type="button" value="Input Button">Submit</button>
			</form> 

		

		</div>

		<?php require './sidebar.php' ?>
		<?php require './footer.php' ?>

	</body>


</html>