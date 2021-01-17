<title>Ефимов</title>
<?
	$link = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user") or die("Невозможно подключиться к серверу");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$fakultet = $_POST['fakultet'];
	$gruppa = $_POST['gruppa'];
	$nomer = $_POST['nomer'];
	$telefon = $_POST['telefon'];
	
	
	mysqli_query($link, "UPDATE student SET name = '$name', fakultet = '$fakultet', gruppa ='$gruppa',nomer ='$nomer',
	telefon='$telefon' WHERE id='$id' ");
	
	echo 'Даннные изменены <p><a href=index2.php> Вернуться к списку </a>  '; 
?>