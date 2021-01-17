<html>
    <head> <title> Редактирование данных ведомости </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?php
                $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                $key_id = $_GET['id'];
                $result = $mysqli->query("SELECT credit_report.id, credit_report.date_delivery,
                                                students.fio as fio, students.id as id_student,
                                                subjects.name as subject, subjects.id as id_subject,
                                                credit_report.mark
                                                FROM credit_report
                                                LEFT JOIN students ON credit_report.name_student=students.id
                                                LEFT JOIN subjects ON credit_report.name_subject=subjects.id
                                                WHERE credit_report.id=$key_id");

                if ($result && $st = $result->fetch_array()){
                  $date_delivery = $st['date_delivery'];
                  $fio = $st['fio'];
                  $subject = $st['subject'];
                  $id_student=$st['id_student'];
                  $id_subject=$st['id_subject'];
                  $mark = $st['mark'];
                }

                // Создание формы
                print "Дата приобретения: <input name='date_delivery' size='50' type='date' placeholder='dd-mm-yyyy' value='$date_delivery'>";

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, fio FROM students WHERE id=$id_student");
                echo "<br>Студент: <select name='id_student'>";
                if ($result){
                    // Для каждой строки из запроса
                    while ($st = $result->fetch_array()){
                        $id = $st['id'];
                        $fio = $st['fio'];

                        echo "<option value='$id'>$fio</option>";
                    }
                }
                echo "</select>";

                $result = $mysqli->query("SELECT id, name FROM subjects WHERE id=$id_subject");
                echo "<br>Предмет: <select name='id_subject'>";

                if ($result){
                    // Для каждой строки из запроса
                    while ($st = $result->fetch_array()){
                        $id = $st['id'];
                        $name = $st['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                print "<br>Оценка: <input name='mark' size='30' type='text' value='$mark'>";
                print "<input type='hidden' name='id' size='30' value='$key_id'>";
            ?>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: red' onclick="window.location.href='credit_report.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
