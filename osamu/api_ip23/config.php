<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=osamu;charset=utf8mb4", "root", "Mpk234a0672ccz");
}
catch (PDOException $e){
    echo 'Ошибка подключения к базе: ' . $e->getMessage();
}
?>
