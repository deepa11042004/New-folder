<?php
// DB connector using PDO (MySQL)
require_once __DIR__ . '/config.php';

$db_config = [
    'host' => '127.0.0.1',
    'name' => 'everace',
    'user' => 'root',
    'pass' => ''
];

try{
    $dsn = "mysql:host={$db_config['host']};dbname={$db_config['name']};charset=utf8mb4";
    $pdo = new PDO($dsn, $db_config['user'], $db_config['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e){
    // In production you should log instead of echo
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

?>