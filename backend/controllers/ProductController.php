<?php
require_once './config/database.php';

$query = $pdo->query("SELECT * FROM products");

$products = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($products);
