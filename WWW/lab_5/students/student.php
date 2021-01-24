<?php
require "../db.php";

$data=$_POST;
?>

<html>
    <head> <title> База данных студентов. Ефимов </title> </head>

    <h2>Список студентов:</h2>
    <table border="1">
        <tr>
            <th> ФИО </th> <th> Факультет </th> <th> Группа </th>
            <th> Номер зачётки </th> <th> Телефон </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
            mysqli_set_charset($mysqli, "utf8mb4");

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT * FROM students");

            if ($result){
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $FIO = $row['fio'];
                    $faculty = $row['faculty'];
                    $group = $row['groups'];
                    $num = $row['num'];
                    $mobile = $row['mobile'];
                    $id=$row['id'];

                    echo "<tr>";
                    echo "<td>$FIO</td><td>$faculty</td><td>$group</td><td>$num</td><td>$mobile</td>";
                    echo "<td><a href='edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }

            print("<p> <a href='../index.php'> Вернуться в меню </a> </p>");
        ?>
</html>
