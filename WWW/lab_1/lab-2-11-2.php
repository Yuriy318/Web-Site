<title>Ефимов</title>
<p> Вариант 1 
<?php
	$n = rand(1, 500);
	$m = rand(1, 500);

	echo(" <br> Делители $n </br>");
	for($i = 1; $i <$n; $i++)
	{
		if($n % $i == 0)
		{
			$sum1 += $i;
			echo($i . '<br>');
		}
	}
	
	echo(" <br> Делители $m </br>");
	for($i = 1; $i <$m; $i++)
	{
		if($m % $i == 0)
		{
			$sum2 += $i;
			echo($i . '<br>');
		}
	}
	
	if($sum1 == $m && $sum2 == $n)
	{
		echo("<br> $n и $m дружественные числа");
	}
	else echo("<br> $n и $m не дружественные числа");
?>

