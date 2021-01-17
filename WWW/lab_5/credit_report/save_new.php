<?php
    $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    if(isset($_POST['add'])){
    $date_delivery = $_POST['date_delivery'];
    $name_student = $_POST['name_student'];
    $name_subject = $_POST['name_subject'];
    $mark = $_POST['mark'];
    // Выполнение запроса
    $result = $mysqli->query("INSERT INTO credit_report
        SET date_delivery='$date_delivery',
            name_student='$name_student',
            name_subject='$name_subject',
            mark='$mark'"
    );

    header("Location: credit_report.php");
    exit;
  }
?>
