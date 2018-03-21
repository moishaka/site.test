<?php

$link = mysqli_connect("127.0.0.1:3306", "evseev", "gRhot1TJabX35Mes", "NameAgeBD");

if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}

?>
#Нет БД с таким пользователем было создано на предыдущей OpenServer 5.2.2