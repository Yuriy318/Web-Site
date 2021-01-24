<?php
    $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к БД";
    }
    $data=$_POST;

    $id = $data['id'];

    $fio = $data['fio'];
    $name = $data['name'];



    $result = $mysqli->query("UPDATE subjects
        SET name='$name',
            fio='$fio'
        WHERE id='$id'"
    );

    header("Location: subjects.php");
    exit;
?>
