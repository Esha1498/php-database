<!DOCTYPE html>
<html>
<head>
    
    <title>Login</title>
    
</head>
<body>

<?php 

	$host = "localhost";
	$user = "task_user";
	$pass = "123";
	$db = "task";

	
	$conn = new mysqli($host, $user, $pass, $db);

	if($conn->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn-> connect_error;
	}
	else {
		
		
		$sql = "select * from user";
		$res1 = $conn->query($sql);
		if($res1->num_rows > 0) {
			while($row = $res1->fetch_assoc()) {
				if($userNamee== $row['username'] && $passworde==$row['password']){

					$msg="Login successfull";
            
               }
              
               else{
                $msg="Unable login ..UserName Or Passwor Invalid please Try again..!!";
               }      
			}
		}
                  
                
            
	}
?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

  <div class="container">
    <label for="uname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br> 

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
     <br><br>  
    <button type="submit">Login</button>
  </div>

  
</form>

</body>
</html>
