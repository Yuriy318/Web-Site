<font size="5">
<?
	if($_POST["a"] > $_POST["b"])  
		{
			echo('Большее из чисел ' . $_POST["a"] . ' и ' . $_POST["b"] . ': ' . $_POST["a"]);
		} 
	else if($_POST["a"] < $_POST["b"])
	{
			echo('Большее из чисел ' . $_POST["a"] . ' и ' . $_POST["b"] . ': ' . $_POST["b"]);
	}
	else{
		echo('Числа ' . $_POST["a"] . ' и ' . $_POST["b"] . ' равны ');
	}
	
		
?> 
</font>