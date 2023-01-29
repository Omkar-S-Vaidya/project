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
<div  style="background-image: url('bus.jpg');
background-size: 1500px 400px;
 background-repeat: no-repeat;">
<center><h1>Kolhapur-Pune bus list </h1><center><br><br>

<div class="container">	
<center>
<table style="width:50%">
  <tr>
    <th>Bus type</th>
    <th>Confirm Date</th> 
    <th>AC Support</th>
    <th>Booking</th>
    

    
</tr>

  <form action="K_P_book.php" method="post">
  <tr>
    
    <td>
		<select  name='btype' onchange='this.form.()' required="" >
         <option value="">Select a option...</option>                                            
         <option value="Sliver">Sliver</option>
         <option value="Gold">Gold</option>                   
         <option value="Platinum">Platinum</option>
         </select> 
	</td>
    <td> <input name='date' type="date" placeholder="Select date..." > </td>
    <td name="ac">Yes</td>
    <td><input type="submit" value="Click Here"></td>
  </tr>
  </form>
</table>

</center>
<br><br><br><br><br>
</div>

</body>
</html>
