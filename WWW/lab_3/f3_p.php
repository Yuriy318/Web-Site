<font size="5">
<?
	if($_POST["d"]=="plus")  
		{
			$c=$_POST["a"]+$_POST["b"];
			if($_POST["p"]=="polnoe")
			{
				echo($_POST["a"] . ' + ' . $_POST["b"] . ' = ' . $c);
			}
			else
			{
				echo("Сумма чисел:  $c");
			}
		} 
	else 
	{
		$c=$_POST["a"]*$_POST["b"];
		if($_POST["p"] == "polnoe" )
		{
			echo($_POST["a"] . ' * ' . $_POST["b"] . ' = ' . $c);
		}
		else
		{
			echo("Произведение чисел: $c");
		}
	}
		
?> 
</font>