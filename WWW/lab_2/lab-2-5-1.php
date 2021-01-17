<title > Ефимов </title>
<p>  Вариант 13 </p>

<?php
	 function variant13($u, $t)
	 {
		 if($u * $t < 0.5)
		 {
			$f=(1+cos($t-$u))/(($u/$t)+pow($t,2));
		 }
		 else if($u * $t >= 0.5)
		 {
			 $f = sin(log(abs($u/$t)));
		 }
		 
		 return $f;
	 }
	$a = rand(-100, 100);
	$b = rand(-100, 100);
	
	$z = pow(cos(variant13($a,$b)),3) + variant13($a+$b, $a-$b);
	echo('Результат ' . $z);
	
?>
 </font></p>