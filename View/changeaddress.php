<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

</head>
<body>
	<form method="post">
		
	
		<label for="street">Street</label>
		<input type="text" id="street" name="street" placeholder="Somewhere Road" required maxlength="150" 
				value="<?php echo (isset($_POST["street"]) ? $_POST["street"] : "");?>">
		<label for="streetNr">Nr.</label>
		<input type="text" id="streetNr" name="streetNr" placeholder="69" required maxlength="5" 
				value="<?php echo (isset($_POST["streetNr"]) ? $_POST["streetNr"] : "");?>">
		<br>
		<label for="city">City</label>
		<input type="text" id="city" name="city" placeholder="City" required maxlength="150" 
				value="<?php echo (isset($_POST["city"]) ? $_POST["city"] : "");?>">
		
		

	


			
		<br>
		        <a href="main.php"> 
                <button type="submit" name="changeAddress" value="sign-up">Change your address now!</button>
		<?php  
		
		?>



			
	</form>
			<div>
				<a href="main.php">
                <button type="submit" name="back" value="back">Back</button>

			</div>


</body>
</html>
