<HTML> <BODY>
<title>Ефимов</title>	
<font size="6"> 
<?
		$log = $_POST["a"];
		$logins = array("efimov", "ivanov", "ugatu", "ussr");
		
		
		
		if (in_array($log, $logins))
			{
				echo ("Приветствую, ");
				switch ($log)
				{
					case 'efimov':
						echo ('Юра!');
					break;
					
					case 'ivanov':
						echo ('Иван!');
					break;
					
					case 'ugatu':
						echo ('студент!');
					break;
					
					case 'ussr':
						echo ('но вас не знаю!');
					break;
					
				}
				
			}
			else
			{
				echo ('Вас нет в базе данных. Зарегистрируйтесь пожалуста!');
			}
		
?>
</font>
</BODY></HTML>
