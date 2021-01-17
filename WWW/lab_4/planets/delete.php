<title>Ефимов</title>
<?
	$link = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user") or die("Невозможно подключиться к серверу");
	$id = $_GET['id'];
	
	mysqli_query($link, "DELETE FROM student WHERE id = '$id'");
	echo 'Успешно удалено <p><a href=index2.php> Вернуться к списку </a>  '; 
	
?>