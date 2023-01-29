<?php 

session_start();

	include("connection.php");
	include("function.php");
	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>sample</title>
</head>
<body>
<a href="logout.php"> logout </a>
<h1>hello, <?php echo $user_data['user_name'];?> </h1>
</body>
</html>
