<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link
      href="./View/custom.css"
      rel="stylesheet">

</head>
<body>
	<form id="register-form" method="post">
		
		<label for="userName">User Name</label>
		<input class="form-group" type="text" id="userName" name="userName" placeholder="Max" required maxlength="150" 
				value="<?php echo (isset($_POST["userName"]) ? $_POST["userName"] : "");?>">
		
		<br>
		<label for="email-field">E-Mail-Adresse:</label>
		<input class="form-group" type="email" id="email-field" name="email" placeholder="max@mustermann.ch" maxlength="150" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ""); ?>">
		<br>
		<label for="password-field">Password</label>
		<input  class="form-group" id="password-field" type="password" name="pwd" placeholder="12345" required value="<?php echo (isset($_POST["pwd"])? 		$_POST["pwd"] : "") ?>">
		<br>
		<label for="password-field">Repeat Your Password:</label>
		<input  class="form-group" id="password-field" type="password" name="pwd2" placeholder="12345" required value="<?php echo (isset($_POST["pwd2"])? $_POST["pwd2"] : "") ?>">
		<br>

		<?php 
			if (!$this->view->isPasswordValid) {
				echo "Not the same Password";
				echo "<br />";
			}
		?>

		<label for="agree-to-tos-checkbox">I accept Terms of Service</label>		
		<input class="form-check" type="checkbox" id="agree-to-tos-checkbox" name="agree_to_tos" required>
			
		<br>
		<button class="btn btn-primary" type="submit" name="signUpButton" value="sign-up">Sign-Up</button>
		<?php  
		if(!$this->view->isEmailValid){
			echo "Email already in use";
			

		}

		?>



			
	</form>
			<div>
				<a id="register-back-button"href="index.php">
                <button class="btn btn-primary" type="submit" name="back" value="back">Back</button>

			</div>


</body>
</html>
