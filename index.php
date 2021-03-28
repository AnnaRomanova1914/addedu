<?php
require_once 'db.php'; // соединение с бд
require_once 'view/header.php';

// проверка наличия отправленных данных с формы поиска
$checkedProgs = !empty($_POST) && isset($_POST['progs']) ? $_POST['progs'] : [];

// подготовка запроса
$sql_where = count($checkedProgs)
    ? ($sql_where =
        'WHERE id in (' .
        implode(', ', array_map('intval', $checkedProgs)) .
        ') ')
    : '';
$sql = 'SELECT * FROM `programms` ' . $sql_where . ' ORDER BY name ASC';

// получаем список программ
$progItems = [];
$result = $conn->query($sql); // запрос на выборку
while ($row = $result->fetch_assoc()) {
    $progItems[$row['id']] = $row['name'];
}

require_once 'view/body.php';
require_once 'view/bottom.php';
