<title>Ефимов</title>
<p> Вывод значения числа "е"
<p> <?php
	$num_e = 2.71828;
	echo ('Число е равно '. ($num_e) . '<br>');
	$num_el = $num_e;
	echo('$num_el' . ' = ' . $num_el. '- is ' . gettype($num_el) . '<br>');
	
	settype($num_el, string);
	echo('$num_el' . ' = ' . $num_el. '- is ' . gettype($num_el). '<br>');
	
	settype($num_el, integer);
	echo('$num_el' . ' = ' . $num_el. '- is ' . gettype($num_el). '<br>');
	
	settype($num_el, bool);
	echo('$num_el' . ' = ' . $num_el. '- is ' . gettype($num_el). '<br>');
	

	
?>