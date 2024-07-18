<?php

// Инициализируем сессию
//session_start();  //TO DO CHECK this function

// Простой способ сделать глобально доступным подключение в БД
function pdo(): PDO
{
    static $pdo;

    if (!$pdo) {
        $config = include __DIR__.'/connConfig/connConfig-S.php';
        // Подключение к БД
        $doSession = 'mysql:dbname='.$config['db-baseName'].';host='.$config['db-hostName'];

        $pdo = new PDO($doSession, $config['db-userName'], $config['db-pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}

function check_auth(): bool
{
    return !!($_SESSION['user_id'] ?? false);
}