<?php
require "../db.php";
$data=$_POST;
?>

<html>
    <head> <title> База данных предмета. Ефимов </title> </head>

    <h2>Список предметов:</h2>
    <table border="1">
        <tr>
            <th> Название предмета </th> <th> ФИО преподавателя </th><th> Редактирование </th><th> Удаление </th>
        </tr>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = mysqli_connect("localhost", "f0504416_user", "root", "f0504416_user");
            mysqli_set_charset($mysqli, "utf8mb4");

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT * FROM subjects");

            if ($result){
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $name = $row['name'];
                    $fio = $row['fio'];
                    $id=$row['id'];

                    echo "<tr>";
                    echo "<td>$name</td><td>$fio</td>";
                    echo "<td><a href='edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }

            print("<p> <a href='../index.php'> Вернуться в меню </a> </p>");
        ?>
</html>
