<?php
	
	//Упражнение 2
	echo('<p > <font size="6" color="blue"> Упражнение 2 </font></p>');
	echo ("Здравствуйте, " . $_POST["userName_post"]);
	echo("<hr>");
	echo("Значение скрытого поля hideField_post равно: " . $_POST["hideField_post"]);
	
?>