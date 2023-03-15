<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

</head>
<body>
	<form method="post">
		
		<label for="userName">User Name</label>
		<input type="text" id="userName" name="userName" placeholder="Max" required maxlength="150" 
				value="<?php echo (isset($_POST["userName"]) ? $_POST["userName"] : "");?>">
		
		<br>
		<label for="email-field">E-Mail-Adresse:</label>
		<input type="email" id="email-field" name="email" placeholder="max@mustermann.ch" maxlength="150" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
		<br>
		<label for="password-field">Password</label>
		<input id="password-field" type="password" name="pwd" placeholder="12345" required value="<?php echo (isset($_POST["pwd"])? 		$_POST["pwd"] : "") ?>">
		<br>
		<label for="password-field">Repeat Your Password:</label>
		<input id="password-field" type="password" name="pwd2" placeholder="12345" required value="<?php echo (isset($_POST["pwd2"])? $_POST["pwd2"] : "") ?>">
		<br>

		<?php 
			if (!$this->view->isPasswordValid) {
				echo "Not the same Password";
				echo "<br />";
			}
		?>

		<label for="agree-to-tos-checkbox">I accept Terms of Service</label>		
		<input type="checkbox" id="agree-to-tos-checkbox" name="agree_to_tos" required>
			
		<br>
		<button  type="submit" name="signUpButton" value="sign-up">Sign-Up</button>
		<?php  
		if(!$this->view->isEmailValid){
			echo "Email already in use";
			

		}

		?>



			
	</form>
			<div>
				<a href="index.php">
                <button type="submit" name="back" value="back">Back</button>

			</div>


</body>
</html>
