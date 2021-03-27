<?php
require_once 'db.php'; // соединение с бд
require_once 'header.php';

// получаем список программ
$progItems = [];
$result = $conn->query('SELECT * FROM `programms` ORDER BY name ASC'); // запрос на выборку
while ($row = $result->fetch_assoc()) {
    $progItems[$row['id']] = $row['name'];
}

require_once 'body.php';
require_once 'bottom.php';
