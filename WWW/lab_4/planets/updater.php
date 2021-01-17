<title>Ефимов</title>
<?
	$link = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user") or die("Невозможно подключиться к серверу");
	$id = $_GET['id'];
	$students = mysqli_query($link,"SELECT * FROM student WHERE id='$id'");
	$students = mysqli_fetch_assoc($students);
	
	echo '<p><a href=index2.php> Вернуться к списку </a>  '; 
?>

<h3> Изменить данные</h3>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?=$students['id']?>">
			<p>ФИО:</p>
			<input type="text" name="name" value="<?=$students['name']?>">
			<p>Факультет:</p>
			<input type="text" name="fakultet" value="<?=$students['fakultet']?>">
			<p>Группа:</p>
			<input type="text" name="gruppa" value="<?=$students['gruppa']?>">
			<p>Номер:</p>
			<input type="text" name="nomer" value="<?=$students['nomer']?>">
			<p>Телефон:</p>
			<input type="text" name="telefon" value="<?=$students['telefon']?>">
			
			<button type="submit">Сохранить</button>
			
		</form>
	