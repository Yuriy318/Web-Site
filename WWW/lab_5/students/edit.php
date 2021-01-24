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

    $dat = mysqli_query($mysqli,"SELECT * FROM students WHERE id='$id_user'");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $fio = $row['fio'];
            $faculty = $row['faculty'];
            $group = $row['groups'];
            $num = $row['num'];
            $mobile = $row['mobile'];
            $id=$row['id'];
        }
      }

?>
<form class="" action="save_all.php" method="post">
  <p>
  <label for="fio">ФИО</label>
  <input type="text" id="fio" name="fio"  value='<?=$fio?>'>
  </p>
  <p>
  <label for="faculty">Факультет</label>
  <input type="text" id="faculty" name="faculty" value='<?=$faculty?>'>
  </p>
  <p>
  <label for="group">Группа</label>
  <input type="text" id="group" name="group" value='<?=$group?>'>
  </p>
  <p>
  <label for="num">Номер зачётки</label>
  <input type="text" id="num" name="num"  value='<?=$num?>'>
  </p>
  <p>
  <label for="mobile">Номер зачётки</label>
  <input type="text" id="mobile" name="mobile"  value='<?=$mobile?>'>
  </p>
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" name="change_mobile">Сохранить всё</button>
</form>



<p><a href="student.php">Назад к сведениям</a></p>
</body>
</html>
