
<?php

require_once ('init.php');

// В цикле перебираем все записи таблицы и выводим их
while ($row = mysqli_fetch_assoc($result))
{
    // Оператором echo выводим на экран поля таблицы name и age
    echo 'Имя: '.$row[$kek];
    echo '<br/>Возраст: '.$row[$lol];
}
?>
