<?php
include("confg.php");
if(isset($_POST['submit'])) 
		{
			$name=$_POST['from'];
			$email=$_POST['to'];
			$date=$_POST['date'];
			
			
			$result=mysqli_query($mysqli,"INSERT into omkar values('','$name','$email','$date')");
			if($result)
			{
				echo "Sucess";
			}
			else
			{
				echo "Failed";
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<form action="" method="POST">
		Name <input type="text" name = "from"><br>
		Email <input type="text" name = "to"><br>
		Date <input type="date" name= "date"><br>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>