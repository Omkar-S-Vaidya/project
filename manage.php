<?php

$from=$_POST['from'];
$to=$_POST['to'];
	if($from =='Mumbai' && $to =='Pune')
	{
		header("Location: M_P.php");
		die;
	}
	else
	{
		if($from =='Mumbai' && $to =='Kolhapur')
		{
			header("Location: M_K.php");
			die;
		}
		else
		{
			if($from =='Kolhapur' && $to =='Mumbai')
			{
				header("Location: K_M.php");
				die;
			}
			else
			{
				if($from =='Kolhapur' && $to =='Pune')
				{
					header("Location: K_P.php");
					die;
				}
				else
				{
					if($from =='Pune' && $to =='Mumbai')
					{
						header("Location: P_M.php");
						die;
					}
					else
					{
						if($from =='Pune' && $to =='Kolhapur')
						{
							header("Location: P_K.php");
							die;
						}
						else
						{
							
						}
						
					}
				}
			}
		}
	}
?>