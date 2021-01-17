<font size="5">
<?
	switch ($_POST["deistvie"])
	{
		case 1:
			$r = $_POST["a"] + $_POST["b"];
		break;
		
		case 2:
			$r = $_POST["a"] - $_POST["b"];
		break;
		
		case 3:
			$r = $_POST["a"] *$_POST["b"];
		break;
		
		case 4:
			$r = $_POST["a"] / $_POST["b"];
		break;
		
	}
	echo("Результат: " . $r);
		
?> 
</font>