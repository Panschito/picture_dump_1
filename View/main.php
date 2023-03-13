<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

</head>
<body>
        <div>
			<div>
				<p>what</p>
                <div>
                <a href="changeaddress.php"> 
                <button type="submit" name="changeAddress" value="changeAddress">Change your Address</button></a>
                </div>
                
                
			</div>
           
            <div>
                <a href="logout.php"> 
                <button type="submit" name="logout" value="logout">Logout</button></a>
                </div>

            <div>
                <h1>Orders</h1>
                 
                <?php
           
                foreach ($this->view->orders as $value) {
                    echo "<div>";
                    echo "<span>";
                    echo $value['notes'];
                    echo "        ";
                    echo "</span>";
                    echo "<span>";
                    echo $value['work'];
                    echo "        ";
                    echo "</span>";
                    echo "<span>";
                    echo $this->view->user->lastName;
                    echo "        ";
                    echo "</span>";
                    echo "<span>";
                    echo $this->view->user->firstName;
                    echo "        ";
                    echo "</span>";
                    echo "</div>";
                    
                }
                
                ?>

                


            </div>
            <div>
                <a href="./order.php"> 
                <button>auftrag erstellen</button></a>
            </div>
            <div>
                <button>auftrag löschen</button>
        
            </div>
        </div>


</body>
</html>