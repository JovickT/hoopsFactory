<?php
//éléments de configuration de la connection à la base de donnée phpMyAdmin hoopsfactory
$host = 'localhost';
$db = 'hoopsfactory';
$user = 'root';
$password = '';
$port = '3306';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;port=$port;charset=$charset";
$options =[
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false,
];
try {
    $pdo = new \PDO($dsn, $user, $password, $options );
} catch (\PDOException $e){
    throw new \PDOException ($e->getMessage(),$e->getCode());
}


?>