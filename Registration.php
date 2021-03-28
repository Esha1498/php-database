<!DOCTYPE html>
<html>
<head>
    
    <title>Registration</title>
    
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
		
		


		$stmt1 = $conn->prepare("insert into user (username, email, password) VALUES (?, ?, ?)");
		$stmt1-> bind_param("sss", $p1,$p2,$p3);
		$p1 = $_POST['username'];
		$p2 = $_POST['email'];
		$p3 = $_POST['password'];
		$stmt1->execute();
		$stmt1->close();
		$conn->close();
		$msg="Registration successfull";

	}



	
	?>

	<form action="Login.php" method="post">
        <div class="container">
   			 <label for="username"><b>Username:</b></label>
   			 <input type="text" placeholder="Enter Username" name="username" required>
   			 <br><br>

   			 <label for="email"><b>Email:</b></label>
   			 <input type="text" placeholder="Enter Email" name="email" required>
   			 <br><br>

  			 <label for="password"><b>Password:</b></label>
   			 <input type="password" placeholder="Enter Password" name="password" required>
    		 <br><br>  
    <button type="submit">Register</button>
  </div>
    </form>

</body>
</html>