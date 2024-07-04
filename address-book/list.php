<?php

require __DIR__ . '/db-connect.php';

$sql = "SELECT * FROM address_book ORDER BY ab_id DESC LIMIT 5 ";
# $stmt = $pdo->query($sql);
# $rows = $stmt->fetchAll();


$rows = $pdo->query($sql)->fetchAll();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);
