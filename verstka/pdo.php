<?php
// ФУНКЦИЯ ДЛЯ ПОДКЛЮЧЕНИЯ К БАЗЕ ДАННЫХ
// подключаемся к базе
function getbase() {
    $pdo = new PDO('mysql:host=localhost;dbname=progress', 'root', 'root');
    return $pdo;
}
