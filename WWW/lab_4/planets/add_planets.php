<title>Ефимов</title>
<?
	$link = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user") or die("Невозможно подключиться к серверу");
	$name = $_POST['name'];
	$fakultet = $_POST['fakultet'];
	$gruppa = $_POST['gruppa'];
	$nomer = $_POST['nomer'];
	$telefon = $_POST['telefon'];
	
	
	
	mysqli_query($link,"INSERT INTO student (id, name, fakultet,gruppa,nomer,telefon) 
	VALUES (NULL, '$name','$fakultet','$gruppa','$nomer','$telefon' )" );
	echo 'Успешно добавлено <p><a href=index2.php> Вернуться к списку </a>  '; 
	
?>