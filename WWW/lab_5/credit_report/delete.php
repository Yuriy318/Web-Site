<?php
    $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM credit_report WHERE id='$id'");

    header("Location: credit_report.php");
    exit;
?>
