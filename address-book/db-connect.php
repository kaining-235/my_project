<?php

# include __DIR__ . '/connect-settings.php';

require __DIR__ . '/connect-settings.php';


$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo = new PDO($dsn, $db_user, $db_pass);

# 執行一個 sql 語句, 取得 PDOStatement 類型的物件
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 3");

# 呼叫 fetch() 取得一筆資料
$row = $stmt->fetch();

# 輸出 JSON 格式
echo json_encode($row);
