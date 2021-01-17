<h2>Начальная страница. Ефимов</h2>
<p> Дата и время:<p>
<?php
    $d=date("d.m.Y H:i");
    echo($d);
?>

<h2>Базы данных</h2>
<ul id="nav"> <!-- Собственные скрипты для просмотра и редактирования БД -->
    <li><a href="students/student.php">База данных студентов</a></li>
    <li><a href="subjects/subjects.php">Предметы</a>
    <li><a href="credit_report/credit_report.php">База данных зачётной ведомости</a>
</ul>

<h2>Регистрация студентов и предметов</h2>
<ul id="nav">
    <li><a href="reg_students/reg_students.html">Регистрация студентов</a></li>
    <li><a href="reg_subjects/reg_subjects.html">Добавление предмета</a></li>
</ul>

<button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы игр</button>
<button onclick="window.location.href='gen_xls.php'">XML-версия таблицы игр</button>
