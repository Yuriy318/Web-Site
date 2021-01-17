<title > Ефимов </title>
<p>  Задание 3 </p>

<?php
	$cust = array (
		'cnum' => 2001,
		'cname' => 'Hoffman',
		'city' => 'London',
		'snum' => 1001
	);
	 
	 
	$cust['rating'] = 100;
	 
	foreach($cust as $k => $v)
		echo $k, ':  ', $v, '<br>';
	 
		
	$cust = array('cnum', 'cname', 'city','snum');
	sort($cust);
	print_r(implode('<br>', $cust));
	
	echo '<br>';
	 
	 
	$cust[] = 'rating';
	ksort($cust);
echo('<pre><p>');	
	print_r(implode('<br>' ,$cust));
	echo '</pre>';
?>
</p>