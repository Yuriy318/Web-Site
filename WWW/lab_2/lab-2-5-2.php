<title > Ефимов </title>

<p> Вариант 2
<?php
	 function variant2($u, $t)
	 {
		 if($u >=0)
		 {
			 $f = $u + 2*$t;
		 }
		 else if($u > -1 && $u < 0)
		 {
			 $f = $u+$t;
		 }
		 else if($u <= -1)
		 {
			 $f = pow($u,2) - 2*$t+1;
		 }
		 return $f;
	 }
	
	$a = rand(-100, 100);
	$b = rand(-100, 100);
	
	$z = variant2($a, pow($a,2)-$a) + variant2($a, pow($b,2));
	echo('<br>' . $z);
	
	
?>
 </font></p>