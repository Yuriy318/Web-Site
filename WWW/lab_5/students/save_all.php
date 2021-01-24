<?php
    $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к БД";
    }
    $data=$_POST;

    $id = $data['id'];

    $fio = $data['fio'];
    $faculty = $data['faculty'];
    $group = $data['group'];
    $num = $data['num'];
    $mobile = $data['mobile'];



    $result = $mysqli->query("UPDATE students
        SET fio='$fio',
            faculty='$faculty',
            groups='$group',
            num='$num',
            mobile='$mobile'
        WHERE id='$id'"
    );

    header("Location: student.php");
    exit;
?>
