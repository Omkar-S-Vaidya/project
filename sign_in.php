<?php
try{

session_start();

	include("connection.php");
	include("function.php");
	
	
	if($_SERVER["REQUEST_METHOD" ] == "POST")
	{
		//something was posted
		$user_name = $_POST['email'];
		$password = $_POST['psw'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id, user_name, password) values ('$user_id','$user_name','$password')";
		
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}
		else
		{
			echo "Please enter valid information...";
		}
		
		
	}
}
catch(Exception $e)
{
	echo "refresh it again";
	
}

?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-img {
  /* The image used */
  background-image: url("bus.jpg");

  min-height: 600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: black;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
	h1{color: white;}
</style>
</head>
<body>


<div class="bg-img">
<form method = "post" class="container">
  
    <h1>Registration</h1>
 
  
<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>


    <label for="psw"><b>Enter Password</b></label>
    <input type="password" placeholder="Create a Password" name="psw" required>
	
<button type="submit" class="btn">Submit</button>
    <p><a href="login.php"><h4>Login in</h4></a></p>
  </div>
</div>
</form>


</body>
</html>