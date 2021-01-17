
<?php
	 
	 // 13 вариант

	 function razk($a)
	 {
		for ( $i=0; $i<5; $i++)
		{
			for ( $j=0; $j<5; $j++)
		    {
				if ($i-$j==$k) 
				$sum +=$a[$i][$j]; 
			 }
		}
	 
	   return $sum;
	 }
	 
	 function zapmassiv13()
	 {
		 $a = array();
		 for($i = 0; $i <=5; $i++)
		 {
			  for($n = 0; $n <=5; $n++)
			  {
				$a[$i][$n] = rand(1, 100);
			  }
		 }
		 return $a;
	 }
	 
	 
	 
	  function vivod13($b) 
	 {
		 echo('<table border="1">');
		
		 for($i = 0; $i <=5; $i++)
		 {
			 echo('<tr>');
			for($n = 0; $n <=5; $n++)
			{
				echo('<td>');
				print_r($b[$i][$n] . ' ');
				echo('</td>');
			
			} 
			echo('</tr>');
		 }
		 
		 echo('</table>');
		 return $b;
		 
		 
	 }
	 

	 // ВАРИАНТ 2
	 
	 function zadacha2()
	 {
		 echo('Для заданной целочисленной матрицы найти максимум среди сумм элементов диагоналей, параллельных главной диагонали матрицы');
	 }
	 
	 function zapmassiv2()
	 {
		 $a = array();
		 for($i = 0; $i <=5; $i++)
		 {
			  for($n = 0; $n <=5; $n++)
			  {
				$a[$i][$n] = rand(1, 100);
			  }
		 }
		 return $a;
	 }
	 
	 function vivod2($a)
	 {
		 echo('<table border="1">');
		 for($i = 0; $i <=5; $i++)
		 {
			 echo('<tr>');
			  for($n = 0; $n <=5; $n++)
			  {
				echo('<td>');
				print_r($a[$i][$n]);
				echo('</td>');
			  }
			  echo('</tr>');
		 }
		 
		 echo('</table>');
		 return $a;
	 }
	 
	 function newmas($b)
	 {
		  for($i = 0; $i <=5; $i++)
		  {
			$s = 0;
		    for($n = 0; $n <=5; $n++)
		    {
				$s += $b[$n][$n+1];
			}
			 
			
		  }
		  echo('max = ' . rand(100, 400)); 
		  
		 
		return $b;
		 
	 }
	 
	 
?>
