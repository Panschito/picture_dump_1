<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order</title>
</head>
<body>
	<form method="post">


		<label>What Should we do?</label>
			<select id=""name="workOption">
				<option value="cleaning">Cleaning</option>
				<option value="repairing">Repairing</option>
				<option value="maintain">Maintain</option>
				<option value="gardening">Gardening</option>
			</select>
			<?php echo (isset($_POST["workOption"])? $_POST["workOption"] : ""); ?>
		<br>
		<textarea name="notes" id="notes" cols="30" rows="10">Notes</textarea>
		
		<br>
		 <button type="submit" name="submitOrder" value="submitOrder">ORDER</button>
		 <br>
		 <a href="main.php"></a>
		 <button type="submit" name="submitOrder" value="submitOrder">Back</button>

	</form>


</body>
</html>