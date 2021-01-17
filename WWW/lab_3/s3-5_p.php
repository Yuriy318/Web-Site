<font size="5">
<?
	//3, 9, 10, 13, 14, 19
	
	$question1 = array($_POST["v3"], $_POST["v9"], $_POST["v10"],$_POST["v13"],$_POST["v14"], $_POST["v19"]);
	$question2 = array($_POST["v1"], $_POST["v2"], $_POST["v4"],$_POST["v5"],$_POST["v6"], $_POST["v7"],
					   $_POST["v8"], $_POST["v11"], $_POST["v12"], $_POST["v15"], $_POST["v16"], $_POST["v17"], $_POST["v18"], $_POST["v20"]);
	$ball = 0;

	for($i = 0; $i <count($question1); $i++)
	{
		if($question1[$i] == "yes")
		{
			$ball++;
		}
	
	}
	
	for($i = 0; $i <count($question2); $i++)
	{
		if($question2[$i] == "not")
		{
			$ball++;
		}
	
	}
	
	if($ball >= 15)
	{
		echo($_POST["a"] . '! У Вас покладистый характер');
	}
	else if($ball < 8)
	{
		echo($_POST["a"] . '! Вашим друзьям можно посочувствовать, без обид :' . ")");
	}else 
		echo($_POST["a"] . '! Вы не лишены недостатков, но с вами можно ладить');
	echo('<p> Ваш балл: '. $ball);
?> 
</font>