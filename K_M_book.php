<?php

session_start();
	
	include("connection.php");
	include("function.php");
	$user_data = check_login($con);
	$a=$_POST['btype'];
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
<div  style="background-image: url('bus.jpg');
background-size: 1500px 400px;
 background-repeat: no-repeat;">
<center><h1>Booking Details </h1><center><br><br>

<div class="container">	
<center>
<table style="width:50%">
<tr>
<th colspan="7"> Kolhapur to Mumbai</th>
</tr>
  <tr>
    <th>Passenger name</th>
	<th>Bus type</th>
	<th>Bus number</th>
    <th>Date</th> 
    <th>AC Support</th>
    <th>Amount</th>
    

    
</tr>

  <form action="K_P_book.php" method="post">
  <tr>
    
    <td> <?php echo $user_data['user_name'];?>  </td>
	<td><?php echo $_POST['btype'];?> </td>
    <td><?php
			if($a=="Sliver")
			{
				echo "MH-12-6578";
			}
			else
			{
				if($a=="Gold")
				{
					echo "MH-14-0504";
				}
				else
				{
					echo "MH-12-1717";
				}
			}
		?> 
	</td>
    <td> <?php echo $_POST['date'];?></td>
    <td name="ac">Yes</td>
    <td><?php
			if($a=="Sliver")
			{
				echo 50;
			}
			else
			{
				if($a=="Gold")
				{
					echo 75;
				}
				else
				{
					echo 100;
				}
			}
		?>
	</td>
  </tr>
  </form>
</table>

</center>
<br><br><br><br><br>
</div>

</body>
</html>
