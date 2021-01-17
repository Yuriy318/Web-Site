<title>Ефимов</title>
<p> Действия с числами	


<?php
	echo('<table border="1">');
	for($i = 1; $i <= 100; $i++){
		if($i % 2 == 0){
			
			echo('<td><font  color="black" > ' . $i . '</font>');
			if($i % 10 == 0){
				echo('<br>');
				echo('<tr>');
			}
			echo('</td>');
	} else{
		echo('<td><font  color="red" > ' . $i . '</td></font>');
		}
		
	}
	echo('</table>');
	
	
?>

