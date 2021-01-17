<title > Ефимов </title>
<p>  Задание 1 </p>

<?php
	
	 $treug=array(1,2,3,4,5,6,7,8,9,10);
	 $kvd=array(1,2,3,4,5,6,7,8,9,10);
	 $rez=array();
	 $rez1=array();

	echo ('Массив треугольных чисел: ' );
	foreach($treug as $k=>$n) {
		$treug[$k]=$n*($n+1)/2;
		echo ($treug[$k] . " ");
	   }
		echo ('<br></br>');


	 echo ('Массив квадратов натуральных чисел: ');
	 foreach($kvd as $a=>$b) {
		$kvd[$a]=$b*$b;
		echo $kvd[$a].' ';
		}
	 echo ('<br></br>');


	 echo ('Массив результат: ');
	 $rez=array_merge($treug,$kvd);
		print_r(implode(' ',$rez));
	 echo ('<br></br>');


	 echo('Отсортированный массив: '. '<br>');
	 sort($rez);
	 reset($rez);
	 while (list($key, $val) = each($rez)) {
	 echo ("rez  [" . $key . "] = " . $val . "<br>");
	}
	 echo '<br></br>';


	 echo('Массив с удаленым первым элементом : ' );
	array_shift($rez);
		print_r(implode(' ',$rez));
	 echo ('<br></br>');

echo('<p>');
	 echo ('Массив с удалением повтор-ся элементов: ');
	$rez1 = array_unique($rez);
			print_r(implode(' ',$rez1));
	
?>
</font></p>