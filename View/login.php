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
	<title>Login</title>
	<link
      href="./View/custom.css"
      rel="stylesheet">
</head>
<body>
	<img id="logo" src="./Resources/logo/Picture-Dump-logos_transparent.png" alt="">
	<div id="login-form">
	
		<form  method="post">
			<label for="email-field">E-Mail</label>
			<input class="form-group" type="email" id="email" name="email" placeholder="Max@mustermann.com" required maxlength="150" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : "");?>">
			<br>
			<label for="password">Password</label>
			<input class="form-group" type="password" id="password"  name="pwd" placeholder="Password" required
			value="<?php echo (isset($_POST["pwd"]) ? $_POST["pwd"] : "");?>">
			<br>
			<button class="btn btn-primary" type="submit" name="loginButton" value="login">LOGIN</button>

		</form>
		<div id="login-button">
					<a href="index.php">
					<button class="btn btn-primary" type="submit" name="back" value="back">Back</button>
					<?php if($this->view->isLoggedIn == false){
						echo "Password or Email is Incorrect";
					}
					?>

				</div>
		</div>
	

	
		

</body>
</html>