<?php
/**
 * Created by PhpStorm.
 * User: 12К
 * Date: 11.03.2018
 * Time: 14:03
 */

require_once ('config\confBD.php');

// Формируем запрос из таблицы с именем NameAgeBD
$bdName = 'NameAge';
$kek = 'name';
$lol = 'age';

$sql = "SELECT $kek, $lol FROM `$bdName`";
$result = mysqli_query($link,$sql);

if (!$result) {
    die('Ошибка соединения c БД: ' . mysqli_error());
}


?>