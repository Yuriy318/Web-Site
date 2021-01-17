<html>
    <head> <title> Зачётная ведомость </title> </head>

    <h2> Список ведомостей: </h2>
    <table border="1">
        <tr>
            <th> Дата сдачи зачёта </th>
            <th> Студент </th>
            <th> Предмет </th> <th> Оценка </th>
        </tr>
        <?php
            $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
            if ($mysqli->connect_errno) {
                echo "Не удалось подключиться к БД";
            }

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT credit_report.id, credit_report.date_delivery,
                students.fio as fio, subjects.name as subject, credit_report.mark FROM credit_report
                LEFT JOIN students ON credit_report.name_student=students.id
                LEFT JOIN subjects ON credit_report.name_subject=subjects.id"
            );

            $counter=0;
            if ($result){
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $date_delivery = $row['date_delivery'];
                    $fio = $row['fio'];
                    $subject = $row['subject'];
                    $mark = $row['mark'];

                    $date_delivery = date('d.m.Y', strtotime($date_delivery));

                    echo "<tr>";
                    echo "<td>$date_delivery</td><td>$fio</td><td>$subject</td><td>$mark</td>";
                    echo "<td><button style='color: red' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: red' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";

                    $counter++;
                }
            }
            print "</table>";
            print("<p>Всего ведомостей: $counter </p>");
        ?>
    <button style='color: red' onclick="window.location.href='new.php'">Добавить ведомость</button></td>
    <button style='color: red' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
