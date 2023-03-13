<!DOCTYPE html>
<html>
<head>
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
