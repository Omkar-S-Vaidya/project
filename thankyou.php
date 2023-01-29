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
 <link rel="stylesheet" href="css/table.css">

 <style>body {background-color: #ADD8E6;}
 select{ background-color: #F597F2;
		 border:0px;}
option{ background-color: #F597F2;
		border:0px;}
 input[type=submit],input[type=date] {
  background-color: #F597F2;
  border: none;

 </style>
</head>
<body>

<br><br><br><br><br><br><br><br><br>
<center><h1>Thank you!</h1>
<br><br><br><br><br>
</div>

</body>
</html>
