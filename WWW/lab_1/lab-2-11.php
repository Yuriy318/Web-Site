<title>Ефимов</title>
<p> Самостоятельная работа Вариант 5 (13)
<p> Задача 1-3
<?php
	
	$n = rand(1, 500);
	echo ("Определить, можно ли представить число $n в виде суммы квадратов двух целых чисел <br>");
	
	for($i = 1; $i <=100; $i++)
	{
		for($k = $i; $k <= 100; $k++)
		{
			$res = pow($i, 2) + pow($k, 2);
			if($res == $n)
				echo($i . '^2 + ' . $k . '^2 = ' . $res . '<br>');
		}
	}
	

?>

