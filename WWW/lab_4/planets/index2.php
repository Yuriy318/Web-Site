<title>Ефимов</title>
<?
	$link = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user") or die("Невозможно подключиться к серверу");
	
?>

<body>
	<table border="1">
		<tr>
		
			<th> ID</th>
			<th> ФИО</th>
			<th> Факультет</th>
			<th> Группа</th>
			<th> Номер зачетки</th>
			<th> Телефон</th>
			<th> Редактировать</th>
			<th> Удалить</th>
		</tr>
		
		<?
			$students = mysqli_query($link, "SELECT * FROM student");
			$students = mysqli_fetch_all($students);
					
			foreach($students as $student)
			{
				?>
				
				<tr>
					<td> <?= $student[0] ?></td>
					<td> <?=$student[1]?></td> 
					<td> <?=$student[2]?></td>
					<td> <?=$student[3]?></td>
					<td> <?=$student[4]?></td>
					<td> <?=$student[5]?></td>
					<td> <a href="updater.php?id=<?= $student[0] ?>">Редактировать</a></td>
					<td><a style ="color: red;" href="delete.php?id=<?= $student[0] ?>"> Удалить</td>
				</tr>
				
				<?
			}
		?>
		
	</table>
	
	<h3> Добавить</h3>
		<form action="add_planets.php" method="post">
			<p>ФИО:</p>
			<input type="text" name="name">
			<p>Факультет:</p>
			<input type="text" name="fakultet">
			<p>Группа:</p>
			<input type="text" name="gruppa">
			<p>Номер зачетки:</p>
			<input type="text" name="nomer">
			<p>Телефон:</p>
			<input type="text" name="telefon">
			
			<button type="submit">Добавить</button>
			
		</form>
	

</body>