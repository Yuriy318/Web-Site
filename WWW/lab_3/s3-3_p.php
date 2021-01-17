<font size="5">
<?
	switch ($_POST["deistvie"])
	{
		case 1:
			for($i = 1; $i <=$_POST["n"]; $i++)
			{
				if($i % 2 ==0)
				{
					echo ($i . " ");
				}
			}
		break;
		
		case 2:
			for($i = 1; $i <=$_POST["n"]; $i++)
			{
				if($i % 2 !=0)
				{
					echo ($i . " ");
				}
			}
		break;
		
		case 3:
			for($i = 1; $i <$_POST["n"]; $i++)
			{
				for($k = 2; $k < $i; $k++) 
				{
					if ($i % $k == 0) continue 2;
				}
				echo ($i . " ") ;
			}
		break;
		
		case 4:
			for($i = 1; $i <$_POST["n"]; $i++)
			{
				$s = 0;
				for($k = 2; $k < $i; $k++) 
				{
					if ($i % $k == 0) 
					{
						echo ($i . " ") ;
						continue 2;
					}
					
				}
				
				
			}
		break;
		
	}
	
		
?> 
</font>