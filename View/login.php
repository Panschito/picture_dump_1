<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form method="post">
		<label for="email-field">E-Mail</label>
		<input type="email" id="email" name="email" placeholder="Max@mustermann.com" required maxlength="150" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : "");?>">
		<br>
		<label for="password">Password</label>
		<input type="password" id="password"  name="pwd" placeholder="Password" required
		value="<?php echo (isset($_POST["pwd"]) ? $_POST["pwd"] : "");?>">
		<br>
		<button type="submit" name="loginButton" value="login">LOGIN</button>

	</form>
	<div>
				<a href="index.php">
                <button type="submit" name="back" value="back">Back</button>
				<?php if($this->view->isLoggedIn == false){
					echo "Password or Email is Incorrect";
				}
				?>

			</div>

</body>
</html>