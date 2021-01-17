<title>Ефимов</title>
<p> Вариант 3
<p> <?php
	echo('Дано выражение (2*c+51*d)/(d-a-1) <br>');
	echo(' Переменная "a" не может быть равна 3 <br>');
	$a = rand(-20,20);
	$c = rand(-20,20);
	$d = rand(-20,20);
	
	
	echo( 
	' a = ' . $a . '<br>' . 
	' c = ' . $c . '<br>' .
	' d = ' . $d . '<br>');
	
	$result = (2*$c+51*$d)/($d-$a-1);
	echo ('Результат: ' . $result . ', тип - ' . gettype($result));
	
?>