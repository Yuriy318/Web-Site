<title>Ефимов</title>
<?
	
	$string = $_POST["t"];
	$str = preg_replace('/[\«\»\'\"]/u', '', $string);
	$count_up = $count_lo = 0;
	for($i=0; $i<strlen($str); $i++)
	{
		if(strtoupper($str[$i]) == $str[$i])
		$count_up++;
		else
		$count_lo++;
	}
	echo $count_up > $count_lo ? 'Прописных букв больше' : ($count_up == $count_lo ? 'Количество прописных букв равно количеству строчных букв' : 'Строчных букв больше');
	if($count_up > $count_lo )
	{
		$string = mb_strtoupper($string);
	}
	else if($count_up < $count_lo)
	{
		$string = mb_strtolower($string);
	}
	echo ('<br>' . 'Преобразуем <br>' . $string);
	
?> 

