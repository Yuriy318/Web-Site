<?php
  require '../db.php';
  $data=$_POST
 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Изменение данных студента. Ефимов</title>
  </head>
  <body>

<?php
    $id_user=$_GET["id"];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
    mysqli_set_charset($mysqli, "utf8mb4");

    $dat = mysqli_query($mysqli,"SELECT * FROM subjects WHERE id='$id_user'");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $name = $row['name'];
            $fio = $row['fio'];
            $id=$row['id'];
        }}

?>
<form class="" action="save_all.php" method="post">
  <p>
  <label for="name">Название предмета</label>
  <input type="text" id="name" name="name"  value='<?=$name?>'>
  </p>
  <p>
  <label for="fio">ФИО преподавателя</label>
  <input type="text" id="fio" name="fio" value='<?=$fio?>'>
  </p>
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" name="change_all">Сохранить</button>
</form>



<p><a href="student.php">Назад к сведениям</a></p>
</body>
</html>
