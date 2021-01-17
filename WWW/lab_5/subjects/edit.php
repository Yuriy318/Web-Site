<?php
  require '../db.php';
  $data=$_POST
 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Изменение данных предмета. Ефимов</title>
  </head>
  <body>

<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
    mysqli_set_charset($mysqli, "utf8mb4");

    $dat = mysqli_query($mysqli,"SELECT * FROM subjects");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $name = $row['name'];
            $fio = $row['fio'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_name'])) {
      if ($data['name']=='') {
        $errors[]='Введите новое название';
      }
      if ($data['name']==$name) {
        $errors[]='Такое название уже стоит';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили название предмета';
        $query="UPDATE subjects SET name='$data[name]' WHERE id=$id";
        $result=mysqli_query($mysqli, $query);
        $name=$data['name'];
        if (!mysqli_query($mysqli, $query)) {
      echo "Что-то не то $query".mysql_error()."<br><br>";
      $result = mysqli_query($query);
    }}
else {
      echo array_shift($errors);
    }
}

//Изменение жанра
if (isset($data['change_fio'])) {
  if ($data['fio']=='') {
    $errors[]='Введите ФИО преподавателя';
  }
  if ($data['fio']==$fio) {
    $errors[]='Такое ФИО преподавателя уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили ФИО преподавателя';
    $query="UPDATE subjects SET fio='$data[fio]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $fio=$data['fio'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

?>
<form class="" action="" method="post">
  <p>
  <input type="text" name="name"  value='<?=$name?>'>
  <button type="submit" name="change_name">Изменить название предмета</button>
  </p>
  <p>
  <input type="text" name="fio" value='<?=$fio?>'>
  <button type="submit" name="change_fio">Изменить ФИО</button>
  </p>
</form>

<p><a href="../subjects/subjects.php">Назад к сведениям</a></p>
</body>
</html>
