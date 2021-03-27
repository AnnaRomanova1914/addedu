<?php
require_once 'db.php'; // соединение с бд
require_once 'header.php';

// получаем список программ
$progItems = [];
$progItemsHTML = '';
$result = $conn->query('SELECT * FROM `programms` ORDER BY name ASC'); // запрос на выборку
while ($row = $result->fetch_assoc()) {
    // готовим куски шаблона в переменную
    $id = $row['id'];
    $name = $row['name'];
    $progItems[$id] = $name;
    $progItemsHTML .=
        '
        <li class="checkbox-box">
            <input type="checkbox" value="' .
        $id .
        '" id="checkbox_' .
        $id .
        '" class="checkbox-prog">
            <label for="checkbox_' .
        $id .
        '">' .
        $name .
        '</label>
        </li>
        ';
}

require_once 'body.php';
require_once 'bottom.php';
