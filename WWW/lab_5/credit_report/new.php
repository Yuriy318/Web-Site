<?php   $mysqli = new mysqli("localhost", "f0504416_user", "root", "f0504416_user");
  if ($mysqli->connect_errno) {
      echo "Не удалось подключиться к БД";
  } ?>

<html>
    <head> <title> Добавление ведомости </title> </head>
    <body>
        <H2>Добавление новой ведомости</H2>

        <form action="save_new.php" method="post">
            Дата сдачи зачёта: <input name="date_delivery" size="50" placeholder="dd.mm.yyyy" type="date">
            <?php

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, fio FROM students");
                echo "<br>Студент: <select name='name_student'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $fio = $row['fio'];

                        echo "<option value='$id'>$fio</option>";
                    }
                }
                echo "</select>";

                // Получение данных о магазинах
                $result = $mysqli->query("SELECT id, name FROM subjects");
                echo "<br>Предмет: <select name='name_subject'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Оценка: <input name="mark" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='credit_report.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
