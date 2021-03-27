<?php
$host = 'localhost'; // хост
$username = 'root'; // пользователь бд
$passwd = '123456'; // пароль к бд
$dbname = 'addedubd'; // бд

// Create connection
$conn = new mysqli($host, $username, $passwd, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
