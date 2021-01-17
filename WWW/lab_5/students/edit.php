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

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
    mysqli_set_charset($mysqli, "utf8mb4");

    $dat = mysqli_query($mysqli,"SELECT * FROM students");

    if ($dat){
        // Для каждой строки из запроса
        while ($row = $dat->fetch_array()){
            $fio = $row['fio'];
            $faculty = $row['faculty'];
            $group = $row['group'];
            $num = $row['num'];
            $mobile = $row['mobile'];
            $id=$row['id'];
        }}
//Изменение названия
    if (isset($data['change_fio'])) {
      if ($data['fio']=='') {
        $errors[]='Введите новое ФИО';
      }
      if ($data['fio']==$fio) {
        $errors[]='Такие данные уже стоят';
      }
      if(empty($errors)){
        echo 'Вы успешно изменили ФИО';
        $query="UPDATE students SET fio='$data[fio]' WHERE id=$id";
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

//Изменение жанра
if (isset($data['change_faculty'])) {
  if ($data['faculty']=='') {
    $errors[]='Введите факультет';
  }
  if ($data['faculty']==$faculty) {
    $errors[]='Такой факультет уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно факультет';
    $query="UPDATE students SET faculty='$data[faculty]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $faculty=$data['faculty'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение разработчика
if (isset($data['change_group'])) {
  if ($data['group']=='') {
    $errors[]='Введите новый номер группы';
  }
  if ($data['group']==$group) {
    $errors[]='Такое номер группы уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили номер группы';
    $query="UPDATE students SET group='$data[group]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $group=$data['group'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение издателя
if (isset($data['change_num'])) {
  if ($data['num']=='') {
    $errors[]='Введите новый номер зачётки';
  }
  if ($data['num']==$num) {
    $errors[]='Такое номер уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили номер зачётки';
    $query="UPDATE students SET num='$data[num]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $num=$data['num'];
    if (!mysqli_query($mysqli, $query)) {
  echo "Что-то не то $query".mysql_error()."<br><br>";
  $result = mysqli_query($query);
}}
else {
  echo array_shift($errors);
  }
}

//Изменение объёма
if (isset($data['change_mobile'])) {
  if ($data['mobile']=='') {
    $errors[]='Введите новый номер телефона';
  }
  if ($data['mobile']==$mobile) {
    $errors[]='Такой номер телефона уже стоит';
  }
  if(empty($errors)){
    echo 'Вы успешно изменили номер телефона';
    $query="UPDATE students SET mobile='$data[mobile]' WHERE id=$id";
    $result=mysqli_query($mysqli, $query);
    $mobile=$data['mobile'];
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
  <input type="text" name="fio"  value='<?=$fio?>'>
  <button type="submit" name="change_fio">Изменить ФИО</button>
  </p>
  <p>
  <input type="text" name="faculty" value='<?=$faculty?>'>
  <button type="submit" name="change_faculty">Изменить факультет</button>
  </p>
  <p>
  <input type="text" name="group" value='<?=$group?>'>
  <button type="submit" name="change_group" >Изменить номер группы</button>
  </p>
  <p>
  <input type="text" name="num"  value='<?=$num?>'>
  <button type="submit" name="change_num">Изменить номер зачётки</button>
  </p>
  <p>
  <input type="text" name="mobile"  value='<?=$mobile?>'>
  <button type="submit" name="change_mobile">Изменить номер телефона</button>
  </p>
</form>

<p><a href="student.php">Назад к сведениям</a></p>
</body>
</html>
