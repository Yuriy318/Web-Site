<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
    mysqli_set_charset($mysqli, "utf8mb4");

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM students WHERE id='$id'");

    header("Location: student.php");
    exit;
?>
